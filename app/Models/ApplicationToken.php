<?php

namespace App\Models;

use App\Casts\TokenAmountCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationToken extends Model
{
    use HasFactory;

    protected $fillable = [
        'system',
        'miners',
    ];

    protected $casts = [
        'system' => TokenAmountCast::class,
        'miners' => TokenAmountCast::class,
    ];
}
