<?php

namespace App\Http\Controllers\API;

use App\Enum\Currency;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\UpdateCurrencyRequest;
use App\Http\Requests\API\UserUpdateRequest;
use App\Http\Resources\ErrorResponse;
use App\Http\Resources\Leaderboard;
use App\Http\Resources\UserResource;
use App\Models\Avatar;
use App\Models\User;
use App\Services\LeaderboardService;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        return new UserResource(auth('api')->user());
    }

    public function currencies()
    {
        return auth()->user()->currencies;
    }

    public function avatars()
    {
        $user = auth()->user();

        $user->loadMissing('avatars');

        return auth()->user()->avatars->map(fn ($avatar) => $avatar->slug);
    }

    public function updateAvatar(Request $request)
    {
        $user = auth()->user();

        $avatar = Avatar::where('slug', $request->input('name'))->first();

        if (!$avatar) {
            return ErrorResponse::notFound('Avatar not found');
        }

        $user->setCurrentAvatar($avatar);

        return response()->json([
            'message' => 'Avatar updated successfully'
        ]);
    }


    public function updateCurrencies(UpdateCurrencyRequest $request)
    {
        $user = auth()->user();

        $currencies = $user->currencies;

        foreach ($request->validated('currencies') as $currency) {
            if ($request->boolean('relative')) {
                $currencies[$currency['currency']] += $currency['amount'];
            } else {
                $currencies[$currency['currency']] = $currency['amount'];
            }
        }

        $user->update([
            'currencies' => $currencies
        ]);


        return $user->currencies;
    }


    public function update(UserUpdateRequest $request)
    {
        $user = auth('api')->user();

        $user->update($request->validated());

        return new UserResource($user);
    }

    public function leaderboard(Request $request)
    {
        $currency = $request->enum('currency', Currency::class) ?? Currency::LAB_CREDITS;

        return LeaderboardService::getLeaderboard($currency);
    }
}
