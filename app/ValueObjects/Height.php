<?php

namespace App\ValueObjects;

use App\Enums\HeightDimension;
use JsonSerializable;

readonly class Height implements JsonSerializable
{
    const CM_IN_INCH = 2.54;

    public function __construct(public int $value, public HeightDimension $dimension)
    {
    }

    public function jsonSerialize(): array
    {
        return [
            'cm' => $this->inCm(),
            'inch' => $this->inInch(),
        ];
    }

    public function inInch(): float|int
    {
        if ($this->dimension === HeightDimension::inch) {
            return $this->value;
        }

        return round($this->value / self::CM_IN_INCH, 2);
    }

    public function inCm(): float|int
    {
        if ($this->dimension === HeightDimension::cm) {
            return $this->value;
        }

        return round($this->value * self::CM_IN_INCH, 2);
    }
}
