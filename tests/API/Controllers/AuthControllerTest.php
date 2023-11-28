<?php

declare(strict_types=1);


use App\Http\Enums\ErrorType;
use App\Models\User;
use function Pest\Laravel\postJson;

it('can register with email and password', function () {
    $data = [
        'name' => 'John Doe',
        'email' => 'johndoe@forislabs.com',
        'password' => 'password',
        'client_id' => $this->oauthClientID,
        'client_secret' => $this->oauthClientSecret,
    ];

    postJson(route('api.register.email'), $data)
        ->assertStatus(200)
        ->assertJsonStructure(['access_token', 'refresh_token']);

    $this->assertDatabaseHas('users', ['name' => 'John Doe', 'email' => 'johndoe@forislabs.com']);
    $this->assertDatabaseHas('oauth_access_tokens', ['user_id' => 1]);

});

it('cannot register with an existing email', function () {

    createUser();

    $data = [
        'name' => 'Kingsley Doe',
        'email' => 'johndoe@forislabs.com',
        'password' => 'password',
        'client_id' => $this->oauthClientID,
        'client_secret' => $this->oauthClientSecret,
    ];

    postJson(route('api.register.email'), $data)
        ->assertStatus(422)
        ->assertJsonFragment([
            'message' => 'The email has already been taken.',
            'type' => ErrorType::InvalidRequestInput,
        ]);

    $this->assertDatabaseMissing('users', ['name' => 'Kingsley Doe', 'email' => 'johndoe@forislabs.com']);
    $this->assertDatabaseMissing('oauth_access_tokens', ['user_id' => 1]);

});

it('cannot register with an invalid email', function () {

    $data = [
        'name' => 'John Doe',
        'email' => 'johndoe',
        'password' => 'password',
        'client_id' => $this->oauthClientID,
        'client_secret' => $this->oauthClientSecret,
    ];

    postJson(route('api.register.email'), $data)
        ->assertStatus(422)
        ->assertJsonStructure(['message']);

});

it('cannot register with a password that is too short', function () {

    $data = [
        'name' => 'John Doe',
        'email' => 'johndoe@gmail.com',
        'password' => 'pass',
        'client_id' => $this->oauthClientID,
        'client_secret' => $this->oauthClientSecret,
    ];

    postJson(route('api.register.email'), $data)
        ->assertStatus(422)
        ->assertJsonFragment([
            'message' => 'The password field must be at least 6 characters.',
            'type' => ErrorType::InvalidRequestInput,
        ]);

});

it('can login with email and password', function () {

    $user = createUser();

    $data = [
        'email' => 'johndoe@forislabs.com',
        'password' => 'password',
        'client_id' => $this->oauthClientID,
        'client_secret' => $this->oauthClientSecret,
    ];

    postJson(route('api.login.email'), $data)
        ->assertStatus(200)
        ->assertJsonStructure(['access_token', 'refresh_token']);

    $this
        ->assertDatabaseHas('oauth_access_tokens', ['user_id' => 1]);

});

it('cannot login with an incorrect email', function () {

    createUser();

    $data = [
        'email' => 'johndoe',
        'password' => 'password',
        'client_id' => $this->oauthClientID,
        'client_secret' => $this->oauthClientSecret,
    ];

    postJson(route('api.login.email'), $data)
        ->assertStatus(422)
        ->assertJsonFragment([
            'message' => 'The email field must be a valid email address.',
            'type' => ErrorType::InvalidRequestInput,
        ]);
});

it('cannot login with an incorrect password', function () {

    createUser();

    $data = [
        'email' => 'johndoe@forislabs.com',
        'password' => 'pass',
        'client_id' => $this->oauthClientID,
        'client_secret' => $this->oauthClientSecret,
    ];

    postJson(route('api.login.email'), $data)
        ->assertStatus(400)
        ->assertJsonFragment([
            'message' => 'The user credentials were incorrect.',
            'type' => ErrorType::InvalidRequestInput,
        ]);
});



