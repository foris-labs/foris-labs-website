<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Enums\ErrorType;
use App\Http\Requests\API\EmailLoginRequest;
use App\Http\Requests\API\EmailRegisterRequest;
use App\Http\Requests\API\SocialLoginRequest;
use App\Http\Resources\ErrorResponse;
use App\Http\Resources\TokenResponse;
use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function emailRegister(EmailRegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->validated('name'),
            'email' => $request->validated('email'),
            'password' => Hash::make($request->validated('password')),
        ]);

        $tokenGrantResponse = Http::post(route('passport.token'), [
            'grant_type' => 'password',
            'client_id' => $request->validated('client_id'),
            'client_secret' => $request->validated('client_secret'),
            'username' => $request->validated('email'),
            'password' => $request->validated('password'),
        ]);

        if ($tokenGrantResponse->successful()) {
            return $this->createTokenResponse($tokenGrantResponse, 201);
        } else {
            return $this->createErrorResponse($tokenGrantResponse);
        }
    }

    public function emailLogin(EmailLoginRequest $request)
    {
        $tokenGrantResponse = Http::post(route('passport.token'), [
            'grant_type' => 'password',
            'client_id' => $request->validated('client_id'),
            'client_secret' => $request->validated('client_secret'),
            'username' => $request->validated('email'),
            'password' => $request->validated('password'),
        ]);

        if ($tokenGrantResponse->successful()) {
            return $this->createTokenResponse($tokenGrantResponse);
        } else {
            return $this->createErrorResponse($tokenGrantResponse);
        }
    }

    public function socialLogin(SocialLoginRequest $request, string $provider)
    {
        $tokenGrantResponse = Http::post(route('passport.token'), [
            'grant_type' => 'social',
            'client_id' => $request->validated('client_id'),
            'client_secret' => $request->validated('client_secret'),
            'provider' => $provider,
            'access_token' => $request->validated('access_token'),
        ]);

        if ($tokenGrantResponse->successful()) {
            return $this->createTokenResponse($tokenGrantResponse);
        } else {
            return $this->createErrorResponse($tokenGrantResponse);
        }
    }

    private function createTokenResponse(Response $response, int $status = 0): TokenResponse
    {
        return new TokenResponse(
            $response->json('access_token'),
            $response->json('refresh_token'),
            ($status == 0) ? $response->status() : $status
        );
    }

    private function createErrorResponse(Response $response): ErrorResponse
    {
        return new ErrorResponse(
            $response->json('message'),
            $this->mapTokenGrantErrorType($response),
            $response->status()
        );
    }

    private function mapTokenGrantErrorType(Response $response): ErrorType
    {
        $error = $response->json('error');

        $errorMap = [
            'unsupported_grant_type' => ErrorType::InvalidRequestInput,
            'invalid_client' => ErrorType::InvalidClient,
            'invalid_request' => ErrorType::InvalidRequestInput,
            'invalid_grant' => ErrorType::InvalidRequestInput,
            'access_denied' => ErrorType::NotAuthenticated,
        ];

        return $errorMap[$error] ?? ErrorType::Unknown;
    }
}
