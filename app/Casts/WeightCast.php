<?php

namespace App\Casts;

use App\Enums\WeightDimension;
use App\ValueObjects\Weight;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class WeightCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if (is_null($value)) {
            return $value;
        }

        return new Weight($value, $model->weight_dimension);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if ($value instanceof Weight) {
            return match (WeightDimension::from($attributes['weight_dimension'])) {
                WeightDimension::kg => $value->inKg(),
                WeightDimension::lb => $value->inLb(),
            };
        }

        return $value;
    }
}
