<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'email', 'value' => 'helpdesk@forislabs.com'],
            ['key' => 'phone_number', 'value' => '090345636464'],
            ['key' => 'facebook', 'value' => 'Foris Labs'],
            ['key' => 'instagram', 'value' => 'Foris Labs'],
            ['key' => 'twitter', 'value' => 'forislabs'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
