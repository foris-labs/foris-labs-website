<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\UserUpdateRequest;
use App\Http\Resources\Leaderboard;
use App\Http\Resources\UserResource;
use App\Models\Currency;
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

    public function update(UserUpdateRequest $request)
    {
        $user = auth('api')->user();

        $user->update($request->validated());

        return new UserResource($user);
    }

    public function leaderboard(Request $request)
    {
        $currency = $request->input('currency', Currency::LAB_CREDITS);

        $leaderboard = Cache::remember("leaderboard-$currency", 3600, function () use ($currency) {
            $users = User::query()
                ->select(['users.name', 'username', 'avatar_url', 'currency_user.balance as score'])
                ->join('currency_user', 'users.id', '=', 'currency_user.user_id')
                ->join('currencies', 'currency_user.currency_id', '=', 'currencies.id')
                ->where('currencies.code', $currency)
                ->orderBy('currency_user.balance', 'desc')
                ->get();

            $rank = 0;
            $users->transform(function ($user) use (&$rank) {
                $user->rank = $rank++;
                return $user;
            });

            return $users;
        });

        return new Leaderboard($leaderboard);
    }
}
