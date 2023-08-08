<?php

namespace App\Models;

use App\Casts\RateCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

	protected $fillable = [
		'email',
		'threshold',
		'tron_wallet',
		'eth_wallet',
		'rate',
		'default_freeze',
	];

	protected $casts = [
		'rate' => RateCast::class,
	];
}
