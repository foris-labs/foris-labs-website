<?php

namespace Database\Seeders;

use App\Models\Avatar;
use App\Models\AvatarUser;
use App\Models\User;
use DB;
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
        $freeAvatars = Avatar::where('price', DB::raw("json_array()"))->pluck('id');

        $admin = User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);

        $admin->avatars()->attach($freeAvatars->random(), ['is_current' => true]);
        $admin->avatars()->sync($freeAvatars);


        $kyrian = User::factory()->create([
            'name' => 'Kyrian Obikwelu',
            'email' => 'kyrianobikwelu@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);

        $kyrian->avatars()->attach($freeAvatars->random(), ['is_current' => true]);
        $kyrian->avatars()->sync($freeAvatars);


        $elvis = User::factory()->create([
            'name' => 'Elvis Emezi',
            'email' => 'elvisemezi@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);

        $elvis->avatars()->attach($freeAvatars->random(), ['is_current' => true]);
        $elvis->avatars()->sync($freeAvatars);


        $promise = User::factory()->create([
            'name' => 'Enwongo-Abasi Udomah',
            'email' => 'enwongo-abasi@forislabs.com',
            'password' => Hash::make('forislabs'),
        ]);

        $promise->avatars()->attach($freeAvatars->random(), ['is_current' => true]);
        $promise->avatars()->sync($freeAvatars);


        $users = User::factory()->count(10)->create();
        $users->each(function (User $user) use ($freeAvatars) {
            $user->avatars()->attach($freeAvatars->random(), ['is_current' => true]);
            $user->avatars()->sync($freeAvatars);
        });
    }
}
