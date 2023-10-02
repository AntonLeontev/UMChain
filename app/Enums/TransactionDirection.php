<?php

namespace App\Enums;

enum TransactionDirection: string
{
    case income = 'income';
    case outcome = 'outcome';
}
