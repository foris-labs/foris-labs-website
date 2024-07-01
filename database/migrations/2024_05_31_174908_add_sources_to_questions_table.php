<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->foreignId('subject_id')->constrained();
            $table->tinyInteger('difficulty_level')->default(1);
            $table->string('source_exam')->nullable();
            $table->string('source_year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn(['source_exam', 'source_year', 'difficulty_level']);
            $table->dropConstrainedForeignId('subject_id');
        });
    }
};
