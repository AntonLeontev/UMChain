<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'accept_ads',
        'additional_goals',
        'agree',
        'bday',
        'deadline',
        'fat_level',
        'food',
        'goal',
        'height_dimension',
        'height_value',
        'name',
        'physical_activity',
        'problems',
        'sex',
        'target_weight_dimension',
        'target_weight_value',
        'training_place',
        'training_time',
        'trainings_count',
        'water',
        'weight_dimension',
        'weight_value',
        'why',
        'zones',
    ];
}
