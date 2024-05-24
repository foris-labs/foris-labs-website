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
        Schema::table('comments', function (Blueprint $table) {
            // Drop the foreign key constraint on 'user_id'
            $table->dropForeign(['user_id']);
            
            // Drop the 'user_id' column
            $table->dropColumn('user_id');
            
            // Make 'name' and 'email' columns non-nullable
            $table->string('name')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            // Revert 'name' and 'email' columns to nullable
            $table->string('name')->nullable()->change();
            $table->string('email')->nullable()->change();

            // Add the 'user_id' column back
            $table->unsignedBigInteger('user_id')->nullable();
        });
    }
};
