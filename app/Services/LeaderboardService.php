<?php

declare(strict_types=1);


namespace App\Services;

use App\Enum\Currency;
use App\Http\Resources\Leaderboard;
use App\Models\AvatarUser;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class LeaderboardService
{
    public static function getLeaderboard(Currency $currency)
    {

        $leaderboard =  Cache::remember("leaderboard-$currency->value", 3600, function () use ($currency) {
            $users = User::query()
                ->join('avatar_user', 'users.id', '=', 'avatar_user.user_id')
                ->join('avatars', 'avatar_user.avatar_id', '=', 'avatars.id')
                ->select([
                    'users.name',
                    'users.username',
                    DB::raw("CAST(JSON_EXTRACT(users.currencies, '$." . $currency->value . "') AS INTEGER) AS score"),
                    'avatars.slug as avatar_slug',
                ])
                ->where('avatar_user.is_current', true)
                ->orderBy(DB::raw("CAST(JSON_EXTRACT(users.currencies, '$." . $currency->value . "') AS INTEGER)"), 'desc')
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

    public static function refreshLeaderboard(Currency $currency): Leaderboard
    {
        Cache::forget("leaderboard-$currency->value");
        return self::getLeaderboard($currency);
    }

    public static function refreshAllLeaderboards(): void
    {
        foreach (Currency::values() as $currency) {
            self::refreshLeaderboard($currency);
        }
    }
}
