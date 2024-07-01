<?php

declare(strict_types=1);


namespace App\Enums;

enum DifficultyLevel: int
{
    case Beginner = 1;
    case Amateur = 2;
    case Intermediate = 3;
    case Advanced = 4;
    case SuperAdvanced = 5;

    public static function toArray(): array
    {
        return [
            self::Beginner->name => self::Beginner->value,
            self::Amateur->name => self::Amateur->value,
            self::Intermediate->name => self::Intermediate->value,
            self::Advanced->name => self::Advanced->value,
            self::SuperAdvanced->name => self::SuperAdvanced->value,
        ];
    }
}
