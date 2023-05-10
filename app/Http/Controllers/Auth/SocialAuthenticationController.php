<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\MyRequest;
use App\Http\Requests\SocialLoginRequest;



class SocialAuthenticationController extends Controller
{
    public function create(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(SocialLoginRequest $Request, string $provider)
    {
        $socialUser = Socialite::driver($provider)->user();

        $user = User::updateOrCreate(
            ['email' => $socialUser->getEmail()],
            [
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                "social_data->{$provider}" => $socialUser->getId()
            ]
        );

        Auth::login($user);

        request()->session()->regenerate();

        return redirect()->intended(route('complete-register'));
    }
}
