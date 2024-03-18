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
            $table->unsignedTinyInteger('gender')->nullable();
            $table->unsignedTinyInteger('age')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->unsignedTinyInteger('activity')->nullable();
            $table->unsignedTinyInteger('level')->nullable();
            $table->unsignedTinyInteger('direction')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'gender',
                'age',
                'height',
                'weight',
                'activity',
                'level',
                'direction',
            ]);
        });
    }
};
