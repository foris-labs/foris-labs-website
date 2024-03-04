<?php

namespace Database\Factories;

use App\Enums\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserActivity>
 */
class UserActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'activity' => fake()->randomElement(Activity::cases())->value,
            'meta' => [],
            'performed_at' => fake()->dateTimeBetween('-1 month'),
        ];
    }
}
