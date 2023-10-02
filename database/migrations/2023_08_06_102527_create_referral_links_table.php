<?php

use App\Models\User;
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
        Schema::create('referral_links', function (Blueprint $table) {
            $table->id()->startingValue(111115);
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->boolean('is_active')->default(0);
            $table->unsignedSmallInteger('umt_percent')->default(0);
            $table->unsignedSmallInteger('usdt_percent')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_links');
    }
};
