<?php

namespace App\Models;

use App\Casts\TokenAmountCast;
use App\Events\OrderAccepted;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'usdt',
        'umt',
        'is_paid',
        'is_accepted',
        'is_viewed',
        'wallet',
        'network',
        'freeze_to',
        'paid_at',
    ];

    protected $casts = [
        'usdt' => TokenAmountCast::class,
        'umt' => TokenAmountCast::class,
        'is_paid' => 'boolean',
        'is_accepted' => 'boolean',
        'is_viewed' => 'boolean',
        'paid_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted(): void
    {
        static::updated(function (Order $order) {
            if (! $order->wasChanged('is_accepted')) {
                return;
            }

            if (! $order->is_accepted) {
                return;
            }

            event(new OrderAccepted($order));
        });
    }
}
