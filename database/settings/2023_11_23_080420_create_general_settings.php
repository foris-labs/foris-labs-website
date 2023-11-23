<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.email', 'helpdesk@forislabs.com');
        $this->migrator->add('general.phoneNumber', '090345636464');
        $this->migrator->add('general.facebookUrl', 'Foris Labs');
        $this->migrator->add('general.instagramUrl', 'Foris Labs');
        $this->migrator->add('general.twitterUrl', 'forislabs');
    }
};
