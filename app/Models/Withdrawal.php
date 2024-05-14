<?php

namespace App\Models;

use App\Casts\TokenAmountCast;
use App\Events\WithdrawalSent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'wallet',
        'amount',
        'is_sent',
    ];

    protected $casts = [
        'amount' => TokenAmountCast::class,
        'is_sent' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted(): void
    {
        static::updating(function (Withdrawal $withdrawal) {
            if (! $withdrawal->wasChanged('is_sent')) {
                return;
            }

            if ($withdrawal->is_sent) {
                return;
            }

            $withdrawal->is_sent = true;
        });

        static::updated(function (Withdrawal $withdrawal) {
            if (! $withdrawal->wasChanged('is_sent')) {
                return;
            }

            if (! $withdrawal->is_sent) {
                return;
            }

            event(new WithdrawalSent($withdrawal));
        });
    }
}
