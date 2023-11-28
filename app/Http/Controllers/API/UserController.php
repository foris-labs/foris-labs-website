<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\UserUpdateRequest;
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

    public function leaderboard()
    {
        $leaderboard = User::query()
            ->select(['users.name', 'username', 'avatar_url', 'currency_user.balance as lab_credits'])
            ->join('currency_user', 'users.id', '=', 'currency_user.user_id')
            ->join('currencies', 'currency_user.currency_id', '=', 'currencies.id')
            ->where('currencies.code', Currency::LAB_CREDITS)
//            ->orderBy('currency_user.balance', 'desc')
            ->get()
            ->rankBy('lab_credits');

       $leaderboard = Cache::remember('leaderboard', 3600, function () {
            return User::query()
                ->select(['users.name', 'username', 'avatar_url', 'currency_user.balance as lab_credits'])
                ->join('currency_user', 'users.id', '=', 'currency_user.user_id')
                ->join('currencies', 'currency_user.currency_id', '=', 'currencies.id')
                ->where('currencies.code', Currency::LAB_CREDITS)
                ->orderBy('currency_user.balance', 'desc')
                ->get();
        });


       dd($leaderboard->toArray());





        return UserResource::collection($users);
    }
}
