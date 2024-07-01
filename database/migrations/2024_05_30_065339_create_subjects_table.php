<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
<<<<<<<< HEAD:database/migrations/2024_06_12_174717_add_role_to_users_table.php
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->nullable()->default('user')->after('email');
========
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('icon')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
>>>>>>>> 1daacd6 (Adding notes and test preps):database/migrations/2024_05_30_065339_create_subjects_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2024_06_12_174717_add_role_to_users_table.php
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
========
        Schema::dropIfExists('subjects');
>>>>>>>> 1daacd6 (Adding notes and test preps):database/migrations/2024_05_30_065339_create_subjects_table.php
    }
};
