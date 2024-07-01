<?php

declare(strict_types=1);


namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ExamBody: string

{
    case WAEC = 'WAEC';
    case NECO = 'NECO';
    case JAMB = 'JAMB';
    case NABTEB = 'NABTEB';

    public static function toArray()
    {
        return [
            self::WAEC->name => self::WAEC->value,
            self::NECO->name => self::NECO->value,
            self::JAMB->name => self::JAMB->value,
            self::NABTEB->name => self::NABTEB->value,
        ];
    }
}
