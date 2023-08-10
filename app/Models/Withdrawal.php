<?php

namespace App\Models;

use App\Casts\OrderAmountCast;
use App\Events\WithdrawalSent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

	protected $fillable = [
		'user_id',
		'network',
		'wallet',
		'amount',
		'is_sent',
	];

	protected $casts = [
		'amount' => OrderAmountCast::class,
		'is_sent' => 'boolean',
	];

	protected static function booted(): void
    {
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
