<?php

declare(strict_types=1);


namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Activity: string implements HasLabel
{
    case CreateAccount = 'create_account';

    case UpdateAccount = 'update_account';

    case EnterLaboratory = 'enter_laboratory';

    case LoginToAccount = 'login_to_account';


    case UseEquipment = 'use_equipment';
    case UseBunsenBurner = 'use_bunsen_burner';

    case UseErlenmeyer = 'use_erlenmeyer';

    case UseBeaker = 'use_beaker';

    case UsePipette = 'use_pipette';

    case UseBurette = 'use_burette';

    case UseDropper = 'use_dropper';

    case UseTestTube = 'use_test_tube';

    case UseSink = 'use_sink';

    case PickupEquipment = 'pickup_equipment';

    case ChangeUsername = 'change_username';

    case CompleteTutorial = 'complete_tutorial';

    case CompleteTrivia = 'complete_trivia';

    public function getLabel(): ?string
    {
        // convert the name of the enum to a human readable label eg `CreateAccount` to `Create Account`
        return ucwords(str_replace('_', ' ', $this->value));
    }
}
