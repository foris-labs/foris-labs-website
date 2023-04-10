<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            'Christ the King College, Onitsha', 'Archbishop Heerey Tecnical College, Ogidi',
            'Queen of the Rosary College, Onitsha',
            'All Hallows Seminary, Onitsha',
            'Dennis Memorial Grammar School, Onitsha', 'Igwebuike Grammar School, Awka'
        ];

        foreach ($schools as $school) {
            School::create(['name' => $school]);
        }
    }
}
