<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('trivia.startTime', '10:00 AM');
        $this->migrator->add('trivia.endTime', '04:00 PM');
        $this->migrator->add('trivia.resetTime', '12:00 AM');
        $this->migrator->add('trivia.questionPerDay', 3);
    }
};
