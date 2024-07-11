<?php

namespace App\Enums;

enum Level: int
{
    case weak = 0;
    case normal = 1;
    case strong = 2;

    public static function fromQuiz(int|float|string $fatLevel, WeightDirection $direction): static
    {
        if ($direction === WeightDirection::gain) {
            return match ((int) $fatLevel) {
                0 => self::strong,
                1 => self::strong,
                2 => self::normal,
                3 => self::normal,
                4 => self::normal,
                5 => self::weak,
                6 => self::weak,
            };
        }

        if ($direction === WeightDirection::loss) {
            return match ((int) $fatLevel) {
                0 => self::weak,
                1 => self::weak,
                2 => self::normal,
                3 => self::normal,
                4 => self::normal,
                5 => self::strong,
                6 => self::strong,
            };
        }

        return self::normal;
    }
}
