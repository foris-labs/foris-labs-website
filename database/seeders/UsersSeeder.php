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
            'name' => 'Administrator',
            'email' => 'admin@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);

        $admin->currencies()->attach([
            1 => ['balance' => fake()->numberBetween(1, 100)],
            2 => ['balance' => fake()->numberBetween(1, 100)],
        ]);

        $kyrian = User::factory()->create([
            'name' => 'Kyrian Obikwelu',
            'email' => 'kyrianobikwelu@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);

        $kyrian->currencies()->attach([
            1 => ['balance' => fake()->numberBetween(1, 80)],
            2 => ['balance' => fake()->numberBetween(1, 200)],
        ]);

        $elvis = User::factory()->create([
            'name' => 'Elvis Emezi',
            'email' => 'elvisemezi@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);

        $elvis->currencies()->attach([
            1 => ['balance' => fake()->numberBetween(1, 70)],
            2 => ['balance' => fake()->numberBetween(1, 156)],
        ]);

        $promise = User::factory()->create([
            'name' => 'Enwongo-Abasi Udomah',
            'email' => 'enwongo-abasi@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);

        $promise->currencies()->attach([
            1 => ['balance' => fake()->numberBetween(1, 83)],
            2 => ['balance' => fake()->numberBetween(1, 103)],
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
