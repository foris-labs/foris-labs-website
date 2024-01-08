<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;

enum Interval: int implements HasLabel
{
    case HOURLY = 1;

    case BI_HOURLY = 2;

    case DAILY = 24;

    case WEEKLY = 168;

    case MONTHLY = 730;

    case YEARLY = 8760;


    public function getLabel(): ?string
    {
        return match ($this) {
            self::HOURLY => 'Hourly',
            self::BI_HOURLY => 'Bi-Hourly',
            self::DAILY => 'Daily',
            self::WEEKLY => 'Weekly',
            self::MONTHLY => 'Monthly',
            self::YEARLY => 'Yearly',
        };
    }
}
