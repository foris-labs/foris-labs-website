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

        foreach ($users as $user) {
            UserActivity::factory()->count(30)->create([
                'user_id' => $user->id,
            ]);

            UserActivity::factory()->count(20)->create([
                'user_id' => $user->id,
                'activity' => Activity::LoginToAccount,
            ]);
        }
    }

}
