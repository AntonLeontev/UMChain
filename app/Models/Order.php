<?php

namespace App\Models;

use App\Casts\OrderAmountCast;
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
		'wallet',
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
}
