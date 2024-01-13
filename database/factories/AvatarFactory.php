<?php

namespace Database\Factories;

use App\Enum\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Avatar>
 */
class AvatarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug,
            'image_url' => 'https://via.placeholder.com/150',
            'price' => [
                Currency::LAB_CREDITS->value => $this->faker->numberBetween(0, 100),
                Currency::FORIS_POINTS->value => $this->faker->numberBetween(0, 100),
            ],
        ];
    }
}
