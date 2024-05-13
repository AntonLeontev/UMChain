<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Casts\TokenAmountCast;
use App\Enums\AccountType;
use App\Enums\Activity;
use App\Enums\Gender;
use App\Enums\Level;
use App\Enums\WeightDirection;
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
        'google_access_token',
        'google_refresh_token',
        'google_expires',
        'gender',
        'age',
        'height',
        'weight',
        'activity',
        'level',
        'direction',
        'token_coef',
        'email_verified_at',
        'created_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'google_access_token',
        'google_refresh_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'umt' => TokenAmountCast::class,
        'usdt' => TokenAmountCast::class,
        'google_expires' => 'datetime',
        'gender' => Gender::class,
        'activity' => Activity::class,
        'level' => Level::class,
        'direction' => WeightDirection::class,
    ];

    protected $with = [
        'tronWallet',
    ];

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
        return $this->hasMany(Transaction::class)
            ->where('account_type', AccountType::umt)
            ->orderByDesc('created_at')
            ->take(10);
    }

    public function withdrawals(): HasMany
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function dataSources(): HasMany
    {
        return $this->hasMany(DataSource::class);
    }

    public function activeDataSource(): HasOne
    {
        return $this->hasOne(DataSource::class)->where('is_active', true)->orderByDesc('created_at');
    }

    public function calorySpends(): HasMany
    {
        return $this->hasMany(CalorySpend::class);
    }

    public function todayCalorySpends(): HasMany
    {
        return $this->hasMany(CalorySpend::class)
            ->whereBetween('created_at', now()->startOfDay(), now()->endOfDay());
    }
}
