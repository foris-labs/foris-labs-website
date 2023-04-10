<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Charles Bridgertion",
            'username' => 'FB Test User',
            'email' => 'charles_oxpgouy_bridgerton@tfbnw.net',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            "social_data->facebook" => 102096212603932
        ]);
        // User::factory()->create();
    }
}
