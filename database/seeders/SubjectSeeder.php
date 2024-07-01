<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            ['name' => 'Chemistry', 'slug' => 'chemistry', 'color' => 'primary'],
            ['name' => 'Physics', 'slug' => 'physics', 'color' => 'info'],
            ['name' => 'Biology', 'slug' => 'biology', 'color' => 'success'],
        ];

        Subject::withoutEvents(fn() => Subject::insert($subjects));
    }
}
