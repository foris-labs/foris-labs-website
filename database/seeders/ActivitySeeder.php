<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            [
                'title' => 'Enter a Laboratory',
                'slug' => 'enter-lab',
                'description' => 'Enter any laboratory in Foris Labs.',
            ],
            [
                'title' => 'Pickup an Equipment',
                'slug' => 'pickup-equipment',
                'description' => 'Pick up any piece of equipment inside the laboratory.',
            ],
            [
                'title' => 'Login to Foris Labs',
                'slug' => 'login-foris-labs',
                'description' => 'Login to Foris Labs using your account.',
            ],
            [
                'title' => 'Change your Username',
                'slug' => 'change-your-username',
                'description' => 'Change your username in your profile.',
            ],
            [
                'title' => 'Use an Erlenmeyer Flask',
                'slug' => 'use-erlenmeyer-flask',
                'description' => 'Use an Erlenmeyer Flask in the laboratory.',
            ],
            [
                'title' => 'Discover a Secret Passage',
                'slug' => 'discover-secret-passage',
                'description' => 'Discover a secret passage in the laboratory.',
            ],
            [
                'title' => 'Use a Bunsen Burner',
                'slug' => 'use-bunsen-burner',
                'description' => 'Use a Bunsen Burner in the laboratory.',
            ],
            [
                'title' => 'Use a Microscope',
                'slug' => 'use-microscope',
                'description' => 'Use a Microscope in the laboratory.',
            ],
            [
                'title' => 'Use a Test Tube',
                'slug' => 'use-test-tube',
                'description' => 'Use a Test Tube in the laboratory.',
            ],
            [
                'title' => 'Use a Beaker',
                'slug' => 'use-beaker',
                'description' => 'Use a Beaker in the laboratory.',
            ],
            [
                'title' => 'Use a Graduated Cylinder',
                'slug' => 'use-graduated-cylinder',
                'description' => 'Use a Graduated Cylinder in the laboratory.',
            ],
            [
                'title' => 'Use a Pipette',
                'slug' => 'use-pipette',
                'description' => 'Use a Pipette in the laboratory.',
            ],
            [
                'title' => 'Use a Dropper',
                'slug' => 'use-dropper',
                'description' => 'Use a Dropper in the laboratory.',
            ],
            [
                'title' => 'Use a Thermometer',
                'slug' => 'use-thermometer',
                'description' => 'Use a Thermometer in the laboratory.',
            ],
            [
                'title' => 'Use a Funnel',
                'slug' => 'use-funnel',
                'description' => 'Use a Funnel in the laboratory.',
            ],
            [
                'title' => 'Use a Mortar and Pestle',
                'slug' => 'use-mortar-and-pestle',
                'description' => 'Use a Mortar and Pestle in the laboratory.',
            ],
            [
                'title' => 'Use a Crucible',
                'slug' => 'use-crucible',
                'description' => 'Use a Crucible in the laboratory.',
            ],
            [
                'title' => 'Use a Watch Glass',
                'slug' => 'use-watch-glass',
                'description' => 'Use a Watch Glass in the laboratory.',
            ],
            [
                'title' => 'Complete a Trivia',
                'slug' => 'complete-trivia',
                'description' => 'Complete a Trivia in the laboratory.',
            ],
            [
                'title' => 'Score 100% in a Trivia',
                'slug' => 'score-100-percent-trivia',
                'description' => 'Score 100% in a Trivia in the laboratory.',
            ],

        ];

        Activity::insert($activities);
    }
}
