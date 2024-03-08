<?php

namespace Database\Factories;

use App\Enums\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserActivity>
 */
class UserActivityFactory extends Factory
{
    protected array $equipments = [
        'Erlenmeyer', 'Beaker', 'Burette', 'Pipette', 'Volumetric Flask', 'Test Tube', 'Bunsen Burner', 'Microscope',
        'Centrifuge', 'Hot Plate', 'pH Meter', 'Incubator', 'Fire Extinguisher', 'First Aid Kit',  'Glove Box',
    ];

    protected array $experiments = [
        'Acid-Base Titration', 'Redox Titration', 'Complexometric Titration', 'Gravimetric Analysis', 'Volumetric Analysis',
        'Colorimetry', 'Flame Test', 'Gas Chromatography',
    ];

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

    /**
     * Create with the `UseEquipment` activity.
     *
     * @return $this
     */
    public function useEquipmentActivity(): self
    {
        return $this->state([
            'activity' => Activity::UseEquipment,
            'meta' => ['equipment' => fake()->randomElement($this->equipments)],
        ]);
    }

    /**
     * Create with the `PickupEquipment` activity.
     *
     * @return $this
     */
    public function pickupEquipmentActivity(): self
    {
        return $this->state([
            'activity' => Activity::PickupEquipment,
            'meta' => ['equipment' => fake()->randomElement($this->equipments)],
        ]);
    }

    /**
     * Create with the `EnterExperiment` activity.
     *
     * @return $this
     */
    public function enterExperimentActivity(): self
    {
        return $this->state([
            'activity' => Activity::EnterExperiment,
            'meta' => ['experiment' => fake()->randomElement($this->experiments)],
        ]);
    }


}
