<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{

    public string $email;
    public string $phoneNumber;
    public ?string $facebookUrl;
    public ?string $instagramUrl;
    public ?string $twitterUrl;

    public static function group(): string
    {
        return 'general';
    }
}
