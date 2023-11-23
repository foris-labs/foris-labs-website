<?php

use App\Enum\Interval;
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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('code', 3);
            $table->text('description')->nullable();
            $table->boolean('can_recharge')->default(false);
            $table->float('recharge_amount')->default(0);
            $table->string('recharge_interval')->default(Interval::daily);

            $table->time('recharge_at')->nullable();
            $table->timestamps();
        });

        Schema::create('currency_user', function(Blueprint $table) {
            $table->id();
            $table->foreignId('currency_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->float('balance')->default(0);

            $table->unique(['currency_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
        Schema::dropIfExists('currency_user');
    }
};
