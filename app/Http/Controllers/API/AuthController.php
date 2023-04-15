<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ErrorResponse;
use App\Http\Resources\TokenResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function socialLogin(Request $request, string $provider)
    {
        // TODO: Check and verify the logic here, make sure to cover all edge cases.
        // TODO: Return the proper error code for any error too. SOme errors are already handled by the grant. Take note.

        if (!$request->has('access_token'))
            return new ErrorResponse(
                "Access token from {$provider} is required",
                "invalid_access_token",
                400
            );

        $accessToken = $request->input('access_token');

        $client_id = $request->input('client_id');

        $client_secret = $request->input('client_secret');

        // Exchange the access token for an OAuth access token
        $response = Http::post(route('passport.token'), [
            'grant_type' => 'social',
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'provider' => $provider,
            'access_token' => $accessToken,
        ]);

        if ($response->successful()) {
            return new TokenResponse(
                $response->json('access_token'),
                $response->json('refresh_token'),
                $response->status());
        } else {
            return new ErrorResponse(
                $response->json("message"),
                $response->json('error'),
                $response->status()
            );
        }
    }
}
