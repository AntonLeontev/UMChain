<?php

namespace App\Enums;

enum WeightDirection: int
{
    case loss = 0;
    case keep = 1;
    case gain = 2;
}
