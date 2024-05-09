<?php

namespace App\Models;

use App\Casts\TokenAmountCast;
use App\Enums\AccountType;
use App\Enums\TransactionDirection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'direction',
        'amount',
        'description',
        'account_type',
    ];

    public function casts(): array
    {
        return [
            'amount' => TokenAmountCast::class,
            'direction' => TransactionDirection::class,
            'account_type' => AccountType::class,
        ];
    }
}
