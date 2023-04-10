<?php

namespace App\Providers;

use App\Grants\SocialGrant;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Bridge\RefreshTokenRepository;
use Laravel\Passport\Passport;
use League\OAuth2\Server\AuthorizationServer;

class SocialGrantServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->resolving(AuthorizationServer::class, function (AuthorizationServer $server) {
            $grant = $this->makeSocialGrant();
            $server->enableGrantType($grant, Passport::tokensExpireIn());
        });
    }

    protected function makeSocialGrant(): SocialGrant
    {
        $grant = new SocialGrant(
            $this->app->make(RefreshTokenRepository::class)
        );

        $grant->setRefreshTokenTTL(Passport::refreshTokensExpireIn());

        return $grant;
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
