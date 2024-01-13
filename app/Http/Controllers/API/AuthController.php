<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\EmailLoginRequest;
use App\Http\Requests\API\EmailRegisterRequest;
use App\Http\Requests\API\SocialLoginRequest;
use App\Http\Resources\ErrorResponse;
use App\Http\Resources\TokenResponse;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    /**
     * Register a new user with email and password
     *
     * @throws Exception
     */
    public function emailRegister(EmailRegisterRequest $request)
    {
        User::create([
            'name' => $request->validated('name'),
            'email' => $request->validated('email'),
            'password' => Hash::make($request->validated('password')),
        ]);

        $tokenRequest = Request::create(route('passport.token'), 'POST', [
                'grant_type' => 'password',
                'client_id' => $request->validated('client_id'),
                'client_secret' => $request->validated('client_secret'),
                'username' => $request->validated('email'),
                'password' => $request->validated('password'),
            ]
            , server: [
                'HTTP_Accept' => 'application/json',
                'HTTP_Content-Type' => 'application/json',
            ]);

        $response = app()->handle($tokenRequest);

        if ($response->isOk())
            return TokenResponse::fromResponse($response);
        else
            return ErrorResponse::fromResponse($response);
    }

    /**
     * Login with email and password
     *
     * @throws Exception
     */
    public function emailLogin(EmailLoginRequest $request)
    {
        $tokenRequest = Request::create(
            uri: route('passport.token'),
            method: 'POST',
            parameters: [
                'grant_type' => 'password',
                'client_id' => $request->validated('client_id'),
                'client_secret' => $request->validated('client_secret'),
                'username' => $request->validated('email'),
                'password' => $request->validated('password'),
            ],
            server: [
                'HTTP_Accept' => 'application/json',
            ]);


        $response = app()->handle($tokenRequest);

        if ($response->isOk())
            return TokenResponse::fromResponse($response);
        else
            return ErrorResponse::fromResponse($response);
    }

    /**
     * Login with social provider access token
     *
     * @throws Exception
     */
    public function socialLogin(SocialLoginRequest $request, string $provider)
    {
        $tokenRequest = Request::create(route('passport.token'), 'POST', [
            'grant_type' => 'social',
            'client_id' => $request->validated('client_id'),
            'client_secret' => $request->validated('client_secret'),
            'provider' => $provider,
            'access_token' => $request->validated('access_token'),
        ]);

        $response = app()->handle($tokenRequest);

        if ($response->isOk())
            return TokenResponse::fromResponse($response);
        else
            return ErrorResponse::fromResponse($response);
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
            ? response()->json(['message' => __($status)])
            : response()->json(['message' => __($status)], 400);
    }

    /**
     * Revokes the current user's access token
     *
     */
    public function logout(Request $request)
    {
        $user = auth('api')->user();
        $user->tokens()->where('client_id', $request->input('client_id'))->delete();

        return response()->json(['message' => 'logout successfully']);
    }
}
