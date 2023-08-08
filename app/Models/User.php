<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Casts\OrderAmountCast;
use App\Enums\AccountType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
		'umt',
		'usdt',
		'agent_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
		'umt' => OrderAmountCast::class,
		'usdt' => OrderAmountCast::class,
		'hasLinkRequest' => 'boolean',
    ];

	protected $with = [
		'ethWallet',
		'tronWallet',
		'acceptedOrders',
		'umtTransactions',
	];

	public function ethWallet(): HasOne
	{
		return $this->hasOne(EthWallet::class);
	}

	public function tronWallet(): HasOne
	{
		return $this->hasOne(TronWallet::class);
	}

	public function orders(): HasMany
	{
		return $this->hasMany(Order::class);
	}

	public function acceptedOrders(): HasMany
	{
		return $this->hasMany(Order::class)->where('is_accepted', true)->orderByDesc('created_at');
	}

	public function activeRefLink(): HasOne
	{
		return $this->hasOne(ReferralLink::class)->where('is_active', true);
	}

	public function refLink(): HasOne
	{
		return $this->hasOne(ReferralLink::class);
	}

	public function agent(): BelongsTo
	{
		return $this->belongsTo(User::class, 'agent_id');
	}

	public function referrals(): HasMany
	{
		return $this->hasMany(User::class, 'agent_id');
	}

	public function transactions(): HasMany
	{
		return $this->hasMany(Transaction::class);
	}

	public function umtTransactions(): HasMany
	{
		return $this->hasMany(Transaction::class)->where('account_type', AccountType::umt);
	}
}
