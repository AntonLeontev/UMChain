<?php

namespace App\Models;

use App\Casts\OrderAmountCast;
use App\Enums\AccountType;
use App\Enums\TransactionDirection;
use App\Events\OrderAccepted;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Order extends Model
{
    use HasFactory;

	protected $fillable = [
		'user_id',
		'usdt',
		'umt',
		'is_paid',
		'is_accepted',
		'wallet',
		'network',
		'freeze_to',
		'paid_at',
	];

	protected $casts = [
		'usdt' => OrderAmountCast::class,
		'umt' => OrderAmountCast::class,
		'is_paid' => 'boolean',
		'is_accepted' => 'boolean',
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
