<?php

namespace App\Models;

use App\Casts\TokenAmountCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CalorySpend extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'calories',
        'coefficient',
        'calories_sum',
        'tokens',
    ];

    protected $casts = [
        'tokens' => TokenAmountCast::class,
    ];

    const UPDATED_AT = null;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}