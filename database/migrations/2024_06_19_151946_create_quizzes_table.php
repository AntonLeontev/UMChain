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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('accept_ads')->default(0);
            $table->string('additional_goals')->nullable();
            $table->boolean('agree')->default(0);
            $table->date('bday')->nullable();
            $table->tinyInteger('deadline')->nullable();
            $table->tinyInteger('fat_level')->nullable();
            $table->tinyInteger('food')->nullable();
            $table->tinyInteger('goal')->nullable();
            $table->string('height_dimension')->nullable();
            $table->unsignedSmallInteger('height_value')->nullable();
            $table->tinyInteger('physical_activity')->nullable();
            $table->string('problems')->nullable();
            $table->string('sex');
            $table->string('target_weight_dimension')->nullable();
            $table->unsignedSmallInteger('target_weight_value')->nullable();
            $table->tinyInteger('training_place')->nullable();
            $table->tinyInteger('training_time')->nullable();
            $table->tinyInteger('trainings_count')->nullable();
            $table->tinyInteger('water')->nullable();
            $table->string('weight_dimension')->nullable();
            $table->unsignedSmallInteger('weight_value')->nullable();
            $table->tinyInteger('why')->nullable();
            $table->string('zones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
