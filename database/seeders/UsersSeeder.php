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
            1 => ['balance' => 100],
            2 => ['balance' => 50],
        ]);

        User::factory()->create([
            'email' => 'charles_oxpgouy_bridgerton@tfbnw.net',
            "social_data->facebook" => 102096212603932
        ]);
    }
}
