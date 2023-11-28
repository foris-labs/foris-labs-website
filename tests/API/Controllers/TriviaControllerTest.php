<?php

declare(strict_types=1);

use App\Http\Enums\ErrorType;
use App\Models\Trivia;
use Carbon\Carbon;
use function Pest\Laravel\actingAs;

it('can get trivia for today', function () {
    $user = createUser();

    Carbon::setTestNow("12:00 PM"); // The trivia window is 10:00 AM - 4:00 PM

    actingAs($user, 'api')
        ->getJson(route('api.trivia'))
        ->assertOk()
        ->assertJsonFragment([
            'message' => 'Trivia available. You can participate now.',
        ]);
});

it('cannot get trivia for today if already taken', function () {
    $user = createUser();

    Carbon::setTestNow("12:00 PM"); // The trivia window is 10:00 AM - 4:00 PM

    $user->trivias()->create(['score' => 10]);

    actingAs($user, 'api')
        ->getJson(route('api.trivia'))
        ->assertStatus(ErrorType::TriviaAlreadyTaken->getStatusCode())
        ->assertJsonFragment([
            'message' => 'Trivia already taken for today.',
            'type' => ErrorType::TriviaAlreadyTaken,
        ]);
});

it('cannot get trivia for today if window (10:00 AM - 4:00 PM) is closed', function () {
    $user = createUser();

    Carbon::setTestNow("4:15 PM"); // The trivia window is 10:00 AM - 4:00 PM

    actingAs($user, 'api')
        ->getJson(route('api.trivia'))
        ->assertStatus(ErrorType::TriviaWindowClosed->getStatusCode())
        ->assertJsonFragment([
            'message' => 'Trivia time window has elapsed.',
            'type' => ErrorType::TriviaWindowClosed,
        ]);
});


