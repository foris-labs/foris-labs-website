<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;

enum Currency: string implements \JsonSerializable, HasLabel
{
    case LAB_CREDITS = 'LC';
    case FORIS_POINTS = 'FP';

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

    public function getColor(): string
    {
        return match ($this) {
            self::LAB_CREDITS => 'primary',
            self::FORIS_POINTS => 'primary',
        };
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::LAB_CREDITS => 'Lab Credits',
            self::FORIS_POINTS => 'Foris Points',
        };
    }

    public function format(int|float $amount): string
    {
        return "$amount $this->value";
    }
}
