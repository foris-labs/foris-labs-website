<?php

declare(strict_types=1);


namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Activity: string implements HasLabel
{
    case UpdateAccount = 'update_account';

    case EnterExperiment = 'enter_experiment';

    case LoginToAccount = 'login_to_account';

    case UseEquipment = 'use_equipment';

    case PickupEquipment = 'pickup_equipment';

    case ChangeUsername = 'change_username';

    case CompleteTutorial = 'complete_tutorial';

    case CompleteTrivia = 'complete_trivia';

    public function getLabel(): ?string
    {
        // convert the name of the enum to a human-readable label eg `CreateAccount` to `Create Account`
        return ucwords(str_replace('_', ' ', $this->value));
    }
}
