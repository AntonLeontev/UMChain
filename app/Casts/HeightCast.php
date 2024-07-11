<?php

namespace App\Casts;

use App\Enums\HeightDimension;
use App\ValueObjects\Height;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class HeightCast implements CastsAttributes
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

        return new Height($value, $model->height_dimension);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if ($value instanceof Height) {
            return match (HeightDimension::from($attributes['height_dimension'])) {
                HeightDimension::inch => $value->inInch(),
                HeightDimension::cm => $value->inCm(),
            };
        }

        return $value;
    }
}
