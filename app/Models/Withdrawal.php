<?php

namespace App\Models;

use App\Casts\OrderAmountCast;
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
}
