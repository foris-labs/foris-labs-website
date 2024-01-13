<?php

namespace App\Observers;

use App\Enum\Currency;
use App\Models\User;

class UserObserver
{
    public function creating(User $user): void
    {
        $user->currencies = Currency::defaults();
    }

    public function saved(User $user): void
    {
        // LeaderboardService::refreshAllLeaderboards();
    }

    public function deleted(User $user): void
    {
        // LeaderboardService::refreshAllLeaderboards();
    }

    public function forceDeleted(User $user): void
    {
    }
}
