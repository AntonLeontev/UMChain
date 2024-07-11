<?php

namespace App\Enums;

enum Gender: int
{
    case man = 0;
    case woman = 1;

    public static function fromQuiz(string $sex): static
    {
        return $sex === 'male'
        ? self::man
            : self::woman;
    }
}
