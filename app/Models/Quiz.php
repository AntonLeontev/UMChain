<?php

namespace App\Models;

use App\Casts\HeightCast;
use App\Casts\WeightCast;
use App\Enums\HeightDimension;
use App\Enums\Sex;
use App\Enums\WeightDimension;
use App\ValueObjects\Height;
use App\ValueObjects\Weight;
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

    protected $casts = [
        'accept_ads' => 'boolean',
        'agree' => 'boolean',
        'bday' => 'date',
        'height_dimension' => HeightDimension::class,
        'height_value' => HeightCast::class,
        'sex' => Sex::class,
        'weight_dimension' => WeightDimension::class,
        'weight_value' => WeightCast::class,
    ];

    public function jsonSerialize(): array
    {
        $model = parent::jsonSerialize();

        $model['height'] = new Height($this->height_value, $this->height_dimension);
        $model['weight'] = new Weight($this->weight_value, $this->weight_dimension);

        dump($model);

        return $model;
    }
}
