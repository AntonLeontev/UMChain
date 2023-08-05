<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Casts\OrderAmountCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
    ];

	protected $with = [
		'ethWallet',
		'tronWallet',
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
		return $this->hasMany(Order::class)->where('is_accepted', true);
	}
}
