<?php

namespace App\Listeners;

use Laravel\Passport\Events\RefreshTokenCreated;
use Laravel\Passport\Token;

class PruneOldTokens
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
    public function handle(RefreshTokenCreated $event): void
    {
        Token::where('id', '<>', $event->accessTokenId)
            ->where('revoked', true)
            ->delete();
    }
}
