<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(OauthClientSeeder::class);
        $this->call(SchoolsSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(AvatarSeeder::class);
        $this->call(UsersSeeder::class);

        $this->call(NotesSeeder::class);
    }
}
