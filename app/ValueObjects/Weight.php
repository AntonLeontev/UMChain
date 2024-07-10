<?php

namespace App\ValueObjects;

use App\Enums\WeightDimension;
use JsonSerializable;

class Weight implements JsonSerializable
{
    const KILO_IN_POUND = 0.4536;

    public function __construct(public int $value, public WeightDimension $dimension)
    {
    }

    public function jsonSerialize(): array
    {
        return [
            'kg' => $this->inKg(),
            'lb' => $this->inLb(),
        ];
    }

    public function inLb(): float|int
    {
        if ($this->dimension === WeightDimension::lb) {
            return $this->value;
        }

        return round($this->value * self::KILO_IN_POUND, 2);
    }

    public function inKg(): float|int
    {
        if ($this->dimension === WeightDimension::kg) {
            return $this->value;
        }

        return round($this->value / self::KILO_IN_POUND, 2);
    }
}
