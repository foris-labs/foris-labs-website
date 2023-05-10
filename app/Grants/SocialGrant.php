<?php

namespace App\Grants;

use App\Http\Enums\ErrorType;
use App\Models\User;
use DateInterval;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use Laravel\Socialite\Facades\Socialite;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\UserEntityInterface;
use League\OAuth2\Server\Exception\OAuthServerException;
use League\OAuth2\Server\Grant\AbstractGrant;
use League\OAuth2\Server\Repositories\RefreshTokenRepositoryInterface;
use League\OAuth2\Server\RequestEvent;
use Laravel\Passport\Bridge\User as UserEntity;
use League\OAuth2\Server\RequestAccessTokenEvent;
use League\OAuth2\Server\RequestRefreshTokenEvent;
use League\OAuth2\Server\ResponseTypes\ResponseTypeInterface;
use Psr\Http\Message\ServerRequestInterface;

class SocialGrant extends AbstractGrant
{


    public function __construct(RefreshTokenRepositoryInterface $refreshTokenRepository)
    {
        $this->setRefreshTokenRepository($refreshTokenRepository);

        $this->refreshTokenTTL = new DateInterval('P1M');
    }

    /**
     * {@inheritdoc}
     * @throws OAuthServerException
     */
    public function respondToAccessTokenRequest(
        ServerRequestInterface $request,
        ResponseTypeInterface  $responseType,
        DateInterval           $accessTokenTTL
    ): ResponseTypeInterface
    {

        // Validate request
        $client = $this->validateClient($request);

        $scopes = $this->validateScopes($this->getRequestParameter('scope', $request), $this->defaultScope);

        $user = $this->validateUser($request, $client);

        // Finalize the requested scopes
        $finalizedScopes = $this->scopeRepository->finalizeScopes($scopes, $this->getIdentifier(), $client, $user->getIdentifier());

        // Issue and persist new access token
        $accessToken = $this->issueAccessToken($accessTokenTTL, $client,
            $user->getIdentifier(), $finalizedScopes);
        $this->getEmitter()->emit(new RequestAccessTokenEvent(RequestEvent::ACCESS_TOKEN_ISSUED, $request, $accessToken));
        $responseType->setAccessToken($accessToken);

        // Issue and persist new refresh token if given
        $refreshToken = $this->issueRefreshToken($accessToken);

        if ($refreshToken !== null) {
            $this->getEmitter()->emit(new RequestRefreshTokenEvent(RequestEvent::REFRESH_TOKEN_ISSUED, $request, $refreshToken));
            $responseType->setRefreshToken($refreshToken);
        }

        return $responseType;
    }

    /**
     * Validate server request and get the user entity.
     *
     * @param ServerRequestInterface $request
     * @param ClientEntityInterface $client
     * @return UserEntityInterface
     * @throws OAuthServerException
     */
    public function validateUser(ServerRequestInterface $request, ClientEntityInterface $client): UserEntity
    {
        $provider = $this->getRequestParameter('provider', $request);
        if (is_null($provider)) {
            throw OAuthServerException::invalidRequest('provider');
        }

        $accessToken = $this->getRequestParameter('access_token', $request);
        if (is_null($accessToken)) {
            throw OAuthServerException::invalidRequest('access_token');
        }

        try {
            $socialUser = Socialite::driver($provider)->userFromToken($accessToken);
        } catch (BadResponseException $exception) {
            $this->getEmitter()->emit(new RequestEvent(RequestEvent::USER_AUTHENTICATION_FAILED, $request));
            throw new OAuthServerException(
                "The access token is invalid",
                11,
                ErrorType::InvalidRequestInput->value,
                400
            );
        }

        $user = User::where("social_data->{$provider}", $socialUser->getId())->first();

        // TODO: Check for users who haven't created an account and prompt them to go create an account on the website first.
        // TODO: Check their subscription status. THis might end up being a different step though ie checked using a different request.

        if (is_null($user)) {
            $this->getEmitter()->emit(new RequestEvent(RequestEvent::USER_AUTHENTICATION_FAILED, $request));
            throw OAuthServerException::invalidCredentials();
        }

        return new UserEntity($user->getAuthIdentifier());
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentifier(): string
    {
        return 'social';
    }
}
