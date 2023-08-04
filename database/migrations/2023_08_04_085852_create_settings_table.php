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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
			$table->string('email')->nullable();
			$table->unsignedInteger('threshold')->default(0)->comment('min amount of UMT to buy');
			$table->string('wallet')->nullable();
			$table->unsignedBigInteger('rate')->default(0)->comment('Cost of 1 USDT in UTM');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
