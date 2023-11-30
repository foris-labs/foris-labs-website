<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OauthClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('oauth_clients')->insert([
            "id" => '98e6df41-43a4-421e-b037-75f023104fda',
            "name" => "Foris Labs App Client",
            "secret" => 'CIK5E3uKmAOPKqpc7YsfluJNmDrB7SyMGx4erC1R',
            'provider' => 'users',
            'redirect' => 'http://localhost',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
