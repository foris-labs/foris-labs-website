<?php

namespace Database\Seeders;

use App\Enum\Currency;
use App\Models\Achievement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievements = [
            [
                'title' => 'First Lab Entry',
                'slug' => 'first-lab-entry',
                'description' => 'Bravely stepped into the world of scientific exploration! The adventure begins...',
                'is_active' => 1,
                'reward' => [
                    Currency::LAB_CREDITS->value => fake()->numberBetween(1, 10),
                    Currency::FORIS_POINTS->value => fake()->numberBetween(1, 10),
                ],
                'activities' => [
                    [
                        'activity_id' => 1,
                        'completion_count' => 1,
                        'is_consecutive' => 0,
                        'consecutive_interval' => 1,
                    ],
                ],
            ],
            [
                'title' => 'Equipment Enthusiast',
                'slug' => 'equipment-enthusiast',
                'description' => 'Picked up 5 different pieces of equipment, eager to uncover their scientific secrets!',
                'is_active' => 1,
                'reward' => [
                    Currency::LAB_CREDITS->value => fake()->numberBetween(1, 10),
                    Currency::FORIS_POINTS->value => fake()->numberBetween(1, 10),
                ],
                'activities' => [
                    [
                        'activity_id' => 2,
                        'completion_count' => 5,
                        'is_consecutive' => 0,
                        'consecutive_interval' => 1,
                    ],
                ],
            ],
            [
                'title' => 'Name Changer',
                'slug' => 'name-changer',
                'description' => 'Changed your username for the first time. A new identity for a new adventure!',
                'is_active' => 1,
                'reward' => [
                    Currency::LAB_CREDITS->value => fake()->numberBetween(1, 10),
                    Currency::FORIS_POINTS->value => fake()->numberBetween(1, 10),
                ],
                'activities' => [
                    [
                        'activity_id' => 4,
                        'completion_count' => 1,
                        'is_consecutive' => 0,
                        'consecutive_interval' => 1,
                    ],
                ],
            ],
            [
                'title' => 'Erlenmeyer God',
                'slug' => 'erlenmeyer-god',
                'description' => "Used an Erlenmeyer Flask 10 times. You're a natural!",
                'is_active' => 1,
                'reward' => [
                    Currency::LAB_CREDITS->value => fake()->numberBetween(1, 10),
                    Currency::FORIS_POINTS->value => fake()->numberBetween(1, 10),
                ],
                'activities' => [
                    [
                        'activity_id' => 5,
                        'completion_count' => 10,
                        'is_consecutive' => 0,
                        'consecutive_interval' => 1,
                    ],
                ],
            ],
            [
                'title' => '7 Day Streak',
                'slug' => '7-day-streak',
                'description' => 'Logged in for 7 consecutive days. You are on a roll!',
                'is_active' => 1,
                'reward' => [
                    Currency::LAB_CREDITS->value => fake()->numberBetween(1, 10),
                    Currency::FORIS_POINTS->value => fake()->numberBetween(1, 10),
                ],
                'activities' => [
                    [
                        'activity_id' => 3,
                        'completion_count' => 7,
                        'is_consecutive' => 1,
                        'consecutive_interval' => 1,
                    ],
                ],
            ],
            [
                'title' => '14 Day Streak',
                'slug' => '14-day-streak',
                'description' => 'Logged in for 14 consecutive days. You are on a roll!',
                'is_active' => 1,
                'reward' => [
                    Currency::LAB_CREDITS->value => fake()->numberBetween(1, 10),
                    Currency::FORIS_POINTS->value => fake()->numberBetween(1, 10),
                ],
                'activities' => [
                    [
                        'activity_id' => 3,
                        'completion_count' => 14,
                        'is_consecutive' => 1,
                        'consecutive_interval' => 1,
                    ],
                ],
            ],
            [
                'title' => '30 Day Streak',
                'slug' => '30-day-streak',
                'description' => 'Logged in for 30 consecutive days. You are on a roll!',
                'is_active' => 1,
                'reward' => [
                    Currency::LAB_CREDITS->value => fake()->numberBetween(1, 10),
                    Currency::FORIS_POINTS->value => fake()->numberBetween(1, 10),
                ],
                'activities' => [
                    [
                        'activity_id' => 3,
                        'completion_count' => 30,
                        'is_consecutive' => 1,
                        'consecutive_interval' => 1,
                    ],
                ],
            ],
            [
                'title' => '60 Day Streak',
                'slug' => '60-day-streak',
                'description' => 'Logged in for 60 consecutive days. You are on a roll!',
                'is_active' => 1,
                'reward' => [
                    Currency::LAB_CREDITS->value => fake()->numberBetween(1, 10),
                    Currency::FORIS_POINTS->value => fake()->numberBetween(1, 10),
                ],
                'activities' => [
                    [
                        'activity_id' => 3,
                        'completion_count' => 60,
                        'is_consecutive' => 1,
                        'consecutive_interval' => 1,
                    ],
                ],
            ],
            [
                'title' => '90 Day Streak',
                'slug' => '90-day-streak',
                'description' => 'Logged in for 90 consecutive days. You are on a roll!',
                'is_active' => 1,
                'reward' => [
                    Currency::LAB_CREDITS->value => fake()->numberBetween(1, 10),
                    Currency::FORIS_POINTS->value => fake()->numberBetween(1, 10),
                ],
                'activities' => [
                    [
                        'activity_id' => 3,
                        'completion_count' => 90,
                        'is_consecutive' => 1,
                        'consecutive_interval' => 1,
                    ],
                ],
            ],
            [
                'title' => '100 Day Streak',
                'slug' => '100-day-streak',
                'description' => 'Logged in for 100 consecutive days. You are on a roll!',
                'is_active' => 1,
                'reward' => [
                    Currency::LAB_CREDITS->value => fake()->numberBetween(1, 10),
                    Currency::FORIS_POINTS->value => fake()->numberBetween(1, 10),
                ],
                'activities' => [
                    [
                        'activity_id' => 3,
                        'completion_count' => 100,
                        'is_consecutive' => 1,
                        'consecutive_interval' => 1,
                    ],
                ],
            ]
        ];

        foreach ($achievements as $achievement) {
            $achievementModel = Achievement::create(
                collect($achievement)->except('activities')->toArray()
            );

            foreach ($achievement['activities'] as $activity)
            {
                $achievementModel->activities()->attach($activity['activity_id'], [
                    'completion_count' => $activity['completion_count'],
                    'is_consecutive' => $activity['is_consecutive'],
                    'consecutive_interval' => $activity['consecutive_interval'],
                ]);
            }
        }
    }
}
