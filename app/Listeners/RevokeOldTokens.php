<?php

namespace App\Listeners;

use Laravel\Passport\Events\AccessTokenCreated;
use Laravel\Passport\Token;

class RevokeOldTokens
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AccessTokenCreated $event): void
    {
        Token::where('user_id', $event->userId)
            ->where('id', '<>', $event->tokenId)
            ->update(['revoked' => true]);
    }
}
