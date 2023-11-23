<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('trivia.startTime', '10:00');
        $this->migrator->add('trivia.endTime', '22:00');
        $this->migrator->add('trivia.questionPerDay', 3);
    }
};
