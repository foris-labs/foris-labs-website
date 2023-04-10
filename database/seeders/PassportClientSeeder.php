<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laravel\Passport\Client;

class PassportClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'id' => '98e5dc3e-eca9-4420-b696-eb790576cb09',
            'name' => 'Foris Labs Personal Access Client',
            'secret' => 'Dbs6TViDIn7GZ4somJX8ZVORveRZusymxYI1imNQ',
            'redirect' => 'http://localhost',
            'personal_access_client' => false,
            'password_client' => false,
            'revoked' => false
        ]);

        Client::create([
            'id' => '98e5dc3f-9418-4ac6-bd6e-77cccb6f2b8f',
            'name' => 'Foris Labs Password Access Client',
            'secret' => 'G9jJKtDY5oDu3QUknHyqnsqrvcmxNUJgF3gdlngq',
            'redirect' => 'http://localhost',
            'personal_access_client' => true,
            'password_client' => true,
            'revoked' => false
        ]);

        Client::create([
            'id' => '98e5de7c-81c6-4f3f-9ad7-84d27e1f6c0b',
            'name' => 'Foris Labs Application Client',
            'secret' => 'TAEe4irXHIAX9MexCrrzJ7UScumC6slXefV2KUfY',
            'redirect' => 'http://localhost',
            'personal_access_client' => false,
            'password_client' => false,
            'revoked' => false
        ]);
    }
}
