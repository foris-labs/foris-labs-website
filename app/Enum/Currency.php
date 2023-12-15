<?php

namespace App\Enum;

enum Currency : string implements \JsonSerializable
{
    case LAB_CREDITS = 'LC';
    case FORIS_POINTS = 'FC';

    public static function toArray(): array
    {
        return [
            self::LAB_CREDITS->value => 'Lab Credits',
            self::FORIS_POINTS->value => 'Foris Points',
        ];
    }
    public static function values(): array
    {
        return [
            self::LAB_CREDITS,
            self::FORIS_POINTS,
        ];
    }
    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
