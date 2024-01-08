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
        Schema::create('achievement_activity', function (Blueprint $table) {
            $table->foreignId('achievement_id')->constrained()->onDelete('cascade');
            $table->foreignId('activity_id')->constrained()->onDelete('cascade');
            $table->integer('completion_count')->default(1);
            $table->boolean('is_consecutive')->default(0);
            $table->integer('consecutive_interval')->default(1);

            $table->primary(['achievement_id', 'activity_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievement_activity');
    }
};
