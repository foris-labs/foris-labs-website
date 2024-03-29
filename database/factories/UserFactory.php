<?php

namespace Database\Factories;

use App\Enums\Currency;
use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password,
            'school_id' => $this->faker->numberBetween(0, School::count()),
            'remember_token' => Str::random(10),
            'currencies' => [
                Currency::LAB_CREDITS->value => $this->faker->numberBetween(0, 1000),
                Currency::FORIS_POINTS->value => $this->faker->numberBetween(0, 1000),
            ],
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
