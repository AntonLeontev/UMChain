<?php

namespace App\Enums;

enum Activity: int
{
    case minimum = 0;
    case moderate = 1;
    case active = 2;

    public static function fromQuiz(int|float|string $value): static
    {
        return match ((int) $value) {
            1 => self::minimum,
            2 => self::minimum,
            3 => self::minimum,
            4 => self::moderate,
            5 => self::moderate,
            6 => self::moderate,
            7 => self::active,
            8 => self::active,
            9 => self::active,
            default => self::moderate,
        };
    }
}
