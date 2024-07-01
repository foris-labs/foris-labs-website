<?php

namespace Database\Factories;

use App\Models\NoteTopic;
use App\Models\NoteTopicGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class NoteTopicFactory extends Factory
{
    protected $model = NoteTopic::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'order' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'group_id' => NoteTopicGroup::factory(),
        ];
    }
}
