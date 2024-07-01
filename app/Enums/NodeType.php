<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum NodeType: string implements HasLabel
{
    case TextOnly = 'text-only';
    case TextWithHeader = 'text-with-header';
    case Image = 'image';
    case Hint = 'hint';
    case Quiz = 'quiz';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::TextOnly => 'Text Only',
            self::TextWithHeader => 'Text with Header',
            self::Image => 'Image',
            self::Hint => 'Hint',
            self::Quiz => 'Quiz',
        };
    }
}
