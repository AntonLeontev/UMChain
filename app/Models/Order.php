<?php

namespace App\Models;

use App\Casts\OrderAmountCast;
use App\Enums\AccountType;
use App\Enums\TransactionDirection;
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

			if (! $order->is_accepted) {
				return;
			}

			DB::transaction(function() use ($order) {
				$order->user->update(['umt' => $order->user->umt + $order->umt]);

				Transaction::create([
					'user_id' => $order->user->id,
					'direction' => TransactionDirection::income,
					'amount' => $order->umt,
					'description' => 'UMT purchase',
					'account_type' => AccountType::umt,
				]);
			});

			if (empty($order->user->agent_id)) {
				return;
			}

			$agent = User::find($order->user->agent_id);

			if(empty($agent->activeRefLink)) {
				return;
			}

			DB::transaction(function() use ($agent, $order) {
				$agent->update([
					'umt' => $agent->umt + $order->umt * $agent->activeRefLink->umt_percent / 100,
					'usdt' => $agent->usdt + $order->usdt * $agent->activeRefLink->usdt_percent / 100,
				]);

				Transaction::create([
					'user_id' => $agent->id,
					'direction' => TransactionDirection::income,
					'amount' => $order->umt * $agent->activeRefLink->umt_percent / 100,
					'description' => 'Referral fee',
					'account_type' => AccountType::umt,
				]);

				Transaction::create([
					'user_id' => $agent->id,
					'direction' => TransactionDirection::income,
					'amount' => $agent->usdt + $order->usdt * $agent->activeRefLink->usdt_percent / 100,
					'description' => 'Referral fee',
					'account_type' => AccountType::usdt,
				]);
			});
        });
    }
}
