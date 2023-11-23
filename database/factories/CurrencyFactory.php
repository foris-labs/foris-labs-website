<?php

namespace Database\Factories;

use App\Enum\Interval;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Currency>
 */
class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'code' => $this->faker->currencyCode,
            'description' => $this->faker->text,
            'can_recharge' => $this->faker->boolean,
            'recharge_amount' => $this->faker->randomFloat(2, 0, 100),
            'recharge_interval' => $this->faker->randomElement(Interval::cases())
        ];
    }
}
