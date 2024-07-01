<?php

namespace Database\Factories;

use App\Models\NoteTopicGroup;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class NoteTopicGroupFactory extends Factory
{
    protected $model = NoteTopicGroup::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'order' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'subject_id' => 1,
        ];
    }
}
