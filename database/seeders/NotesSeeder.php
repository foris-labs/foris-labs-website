<?php

namespace Database\Seeders;

use App\Models\NoteTopic;
use App\Models\NoteTopicGroup;
use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    public function run(): void
    {
        $topicGroups = [
            'Introduction to Chemistry' => [
                'The Scientific Method',
                'Matter and Change',
                'Measurement and Calculations',
                'Atoms and Elements',
            ],
            'States of Matter' => [
                'The Nature of Gases',
                'Intermolecular Forces',
                'The Nature of Solids',
                'Solutions',
            ],
            'Chemical Reactions' => [
                'Chemical Equations',
                'Stoichiometry',
                'Types of Chemical Reactions',
                'Rates of Chemical Reactions',
            ],
            'The Periodic Table' => [
                'Development of the Periodic Table',
                'Electron Configurations',
                'Periodic Trends',
                'Periodic Properties',
            ],
        ];

        $groupOrder = 1;

        foreach ($topicGroups as $group => $topics) {
            $topicGroup = NoteTopicGroup::factory()->create([
                'title' => $group,
                'order' => $groupOrder++,
            ]);

            $topicOrder = 1;

            foreach ($topics as $topic) {
                NoteTopic::factory()->create([
                    'title' => $topic,
                    'group_id' => $topicGroup->id,
                    'order' => $topicOrder++,
                ]);
            }
        }


    }
}
