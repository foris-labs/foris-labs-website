<?php

declare(strict_types=1);

use App\Enum\Currency;
use Database\Seeders\CurrencySeeder;
use Database\Seeders\UsersSeeder;
use function Pest\Laravel\actingAs;

it('can get the authenticated user details', function () {
    $user = createUser();

    actingAs($user, 'api')
        ->getJson(route('api.user'))
        ->assertOk()
        ->assertJsonFragment([
            'fullname' => $user->name,
            'username' => $user->username,
            'email' => $user->email,
        ]);
});

it('can update the authenticated user details', function () {
    $user = createUser();

    actingAs($user, 'api')
        ->putJson(route('api.user.update'), [
            'name' => 'John Doe',
            'username' => 'johndoe',
            'email' => 'johndoe123@forislabs.com',
        ])
        ->assertOk()
        ->assertJsonFragment([
            'fullname' => 'John Doe',
            'username' => 'johndoe',
            'email' => 'johndoe123@forislabs.com',
        ]);

    $this->assertDatabaseHas('users', [
        'name' => 'John Doe',
        'username' => 'johndoe',
        'email' => 'johndoe123@forislabs.com',
    ]);
});

it('cannot update the authenticated user details with an existing email', function () {
    $user = createUser();
    createUser('Jane Doe', 'janedoe@forislabs.com');

    actingAs($user, 'api')
        ->putJson(route('api.user.update'), [
            'email' => 'janedoe@forislabs.com',
        ])
        ->assertStatus(422)
        ->assertJsonFragment([
            'message' => 'The email has already been taken.',
            'type' => 'invalid_request_input',
        ]);
});

it('cannot update the authenticated user details with an existing username', function () {
    $user = createUser();
    createUser('Jane Doe', 'janedoe@forislabs.com');

    actingAs($user, 'api')
        ->putJson(route('api.user.update'), [
            'username' => 'janedoe',
        ])
        ->assertStatus(422)
        ->assertJsonFragment([
            'message' => 'The username has already been taken.',
            'type' => 'invalid_request_input',
        ]);
});

it('cannot update the authenticated user details with an invalid email', function () {
    $user = createUser();

    actingAs($user, 'api')
        ->putJson(route('api.user.update'), [
            'email' => 'invalid-email',
        ])
        ->assertStatus(422)
        ->assertJsonFragment([
            'message' => 'The email must be a valid email address.',
            'type' => 'invalid_request_input',
        ]);
});

it('can get the leaderboard', function () {
    $this->seed(UsersSeeder::class);

    $user = createUser();

    actingAs($user, 'api')
        ->getJson(route('api.user.leaderboard'))
        ->assertOk()
        ->assertJsonStructure([
            'entries' => [
                '*' => ['username', 'score', 'rank', 'avatar_url']
            ],
            'user_entry' => ['username', 'score', 'rank', 'avatar_url'],
        ]);
});

it('can get user currencies', function () {
    $user = createUser();

    actingAs($user, 'api')
        ->getJson(route('api.user.currencies'))
        ->assertOk()
        ->assertJsonStructure([
            Currency::LAB_CREDITS->value,
            Currency::FORIS_POINTS->value,
        ]);
});


