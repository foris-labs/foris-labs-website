<?php

namespace Database\Seeders;

use App\Enums\Activity;
use App\Models\User;
use App\Models\UserActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserActivity::truncate();
        $users = User::all();
        $equipments = [
            'Erlenmeyer',
            'Beaker',
            'Burette',
            'Pipette',
            'Volumetric Flask',
            'Test Tube',
            'Bunsen Burner',
            'Microscope',
            'Centrifuge',
            'Hot Plate',
            'Magnetic Stirrer',
            'pH Meter',
            'Incubator',
            'Safety Shower',
            'Fire Extinguisher',
            'Fire Blanket',
            'First Aid Kit',
            'Chemical Storage Cabinet',
            'Glove Box',
        ];

        $experiments = [
            'Acid-Base Titration',
            'Redox Titration',
            'Complexometric Titration',
            'Gravimetric Analysis',
            'Volumetric Analysis',
            'Colorimetry',
            'Flame Test',
            'Gas Chromatography',
        ];

        foreach ($users as $user) {

            UserActivity::factory()
                ->count(fake()->numberBetween(1, 30))
                ->create([
                    'user_id' => $user->id,
                    'activity' => Activity::LoginToAccount,
                ]);

            UserActivity::factory()
                ->enterExperimentActivity()
                ->count(fake()->numberBetween(1, 30))
                ->create([
                    'user_id' => $user->id,
                ]);

            UserActivity::factory()
                ->useEquipmentActivity()
                ->count(fake()->numberBetween(1, 30))
                ->create([
                    'user_id' => $user->id
                ]);

            UserActivity::factory()
                ->pickupEquipmentActivity()
                ->count(fake()->numberBetween(1, 30))
                ->create([
                    'user_id' => $user->id,
                ]);
        }
    }

}
