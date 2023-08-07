<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class ReferralLink extends Model
{
    use HasFactory;

	protected $fillable = [
		'is_active', 
		'user_id',
		'umt_percent',
		'usdt_percent',
	];

	protected $casts = ['is_active' => 'boolean'];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function clicks(): HasMany
	{
		return $this->hasMany(ReferralLinkClick::class);
	}

	public function registrations(): HasMany
	{
		return $this->hasMany(ReferralLinkRegistration::class);
	}
}
