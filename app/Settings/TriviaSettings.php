<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class TriviaSettings extends Settings
{
    public string $startTime;
    public string $endTime;
    public string $resetTime;
    public int $questionPerDay;

    public static function group(): string
    {
        return 'trivia';
    }

    public static function get() :self
    {
        return app(self::class);
    }
}
