<?php

namespace Database\Seeders;

use App\Models\Avatar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get all images in the avatars directory

        $avatarPaths = collect(glob(storage_path('app/public/avatars/*')));


        $avatars = $avatarPaths->map(function ($avatarPath) {
            return [
                'slug' => pathinfo($avatarPath, PATHINFO_FILENAME),
                'image_url' => basename($avatarPath),
                'price' => json_encode(fake()->randomElement([
                    [
                        'LC' => fake()->numberBetween(1, 100),
                        'FP' => fake()->numberBetween(1, 100),
                    ],
                    ['FP' => fake()->numberBetween(1, 100)],
                    ['FP' => fake()->numberBetween(1, 100)],
                    []
                ])),
            ];
        });

        Avatar::withoutEvents(function () use ($avatars) {
            Avatar::insert($avatars->toArray());
        });
    }
}
