<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\Currency;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class LeaderboardService
{
    /**
     * @return Collection<User>
     */
    public static function get(): Collection
    {
        return Cache::remember("leaderboard", 3600, function () {
            $currency = Currency::FORIS_POINTS;

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
    }

    public static function refresh(): void
    {
        Cache::forget("leaderboard");
    }
}
