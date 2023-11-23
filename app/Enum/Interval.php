<?php

namespace App\Enum;

enum Interval: string
{
    case hourly = 'hourly';
    case monthly = 'monthly';
    case weekly = 'weekly';
    case daily = 'daily';


    public static function toArray(): array
    {
        return [
            'hourly' => 'Hourly',
            'monthly' => 'Monthly',
            'weekly' => 'Weekly',
            'daily' => 'Daily',
        ];
    }
}
