<?php

namespace App\Models;

use App\Casts\OrderAmountCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
		'freeze_to',
	];

	protected $casts = [
		'usdt' => OrderAmountCast::class,
		'umt' => OrderAmountCast::class,
		'is_paid' => 'boolean',
		'is_accepted' => 'boolean',
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

			if ($order->is_accepted) {
				$umt = $order->user->umt;
				$order->user->update(['umt' => $umt + $order->umt]);
				Log::channel('telegram')->debug('Order accepted', [$order->user->umt]);
			}
        });
    }
}
