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


        $kyrian = User::factory()->create([
            'name' => 'Kyrian Obikwelu',
            'email' => 'kyrianobikwelu@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);


        $elvis = User::factory()->create([
            'name' => 'Elvis Emezi',
            'email' => 'elvisemezi@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);


        $promise = User::factory()->create([
            'name' => 'Enwongo-Abasi Udomah',
            'email' => 'enwongo-abasi@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);


        $users = User::factory()->count(10)->create();
    }
}
