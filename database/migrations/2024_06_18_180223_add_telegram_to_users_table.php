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
        Schema::table('users', function (Blueprint $table) {
            $table->after('is_enabled_withdraw', function (Blueprint $table) {
                $table->bigInteger('telegram_id')->nullable()->unique();
                $table->boolean('quiz_is_done')->default(0);
            });

            $table->string('email')->nullable()->change();
            $table->string('password')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['telegram_id', 'quiz_is_done']);

            $table->string('email')->change();
            $table->string('password')->change();
        });
    }
};
