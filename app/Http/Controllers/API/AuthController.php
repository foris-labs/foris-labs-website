<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function socialLogin(Request $request, string $provider)
    {
        if (!$request->has('access_token'))
            // TODO: Check and verify the logic here, make sure to cover all edge cases.
            // TODO: Return the proper error code for any error too. SOme errors are already handled by the grant. Take note.
            return response()->json(['message' => 'Access token required'], 403);

        $accessToken = $request->input('access_token');

        $client_id = $request->input('client_id', env('PASSPORT_APP_ACCESS_CLIENT_ID'));

        $client_secret = $request->input('client_secret', env('PASSPORT_APP_ACCESS_CLIENT_SECRET'));

        // Exchange the access token for an OAuth access token
        $response = Http::post(route('passport.token'), [
            'grant_type' => 'social',
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'provider' => $provider,
            'access_token' => $accessToken,
        ]);

        return $response;
    }
}
