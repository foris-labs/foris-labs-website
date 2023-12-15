<?php

namespace App\Http\Controllers\API;

use App\Enum\Currency;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\UpdateCurrencyRequest;
use App\Http\Requests\API\UserUpdateRequest;
use App\Http\Resources\Leaderboard;
use App\Http\Resources\UserResource;
use App\Models\User;
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

        $leaderboard = Cache::remember("leaderboard-$currency->value", 3600, function () use ($currency) {
            $users = User::query()
                ->select(['users.name', 'username', 'avatar_url', "currencies->{$currency->value} as score"])
                ->orderBy('currencies->' . $currency->value, 'desc')
                ->get();


            $rank = 0;
            $users->transform(function ($user) use (&$rank) {
                $user->rank = ++$rank;
                return $user;
            });

            return $users;
        });

        return new Leaderboard($leaderboard);
    }
}
