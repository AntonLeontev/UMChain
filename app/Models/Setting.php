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
		'wallet',
		'rate',
	];

	protected $casts = [
		'rate' => RateCast::class,
	];
}
