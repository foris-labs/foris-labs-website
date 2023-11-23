<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class TriviaSettings extends Settings
{
    public string $startTime;
    public string $endTime;
    public int $questionPerDay;

    public static function group(): string
    {
        return 'trivia';
    }
}
