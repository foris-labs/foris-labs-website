<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'email' => 'admin@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);

        $admin->currencies()->attach([
            1 => ['balance' => fake()->numberBetween(1, 100)],
            2 => ['balance' => fake()->numberBetween(1, 100)],
        ]);

        $fbUser = User::factory()->create([
            'email' => 'charles_oxpgouy_bridgerton@tfbnw.net',
            "social_data->facebook" => 102096212603932
        ]);

        $fbUser->currencies()->attach([
            1 => ['balance' => fake()->numberBetween(1, 100)],
            2 => ['balance' => fake()->numberBetween(1, 100)],
        ]);

        $users = User::factory()->count(10)->create();

        foreach ($users as $user) {
            $user->currencies()->attach([
                1 => ['balance' => fake()->numberBetween(1, 100)],
                2 => ['balance' => fake()->numberBetween(1, 100)],
            ]);
        }
    }
}
