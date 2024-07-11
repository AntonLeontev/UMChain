<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Casts\HeightCast;
use App\Casts\TokenAmountCast;
use App\Casts\WeightCast;
use App\Enums\AccountType;
use App\Enums\Activity;
use App\Enums\Gender;
use App\Enums\HeightDimension;
use App\Enums\Level;
use App\Enums\WeightDimension;
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
        'umt_frozen',
        'agent_id',
        'google_access_token',
        'google_refresh_token',
        'google_expires',
        'gender',
        'age',
        'height',
        'height_dimension',
        'weight',
        'weight_dimension',
        'activity',
        'level',
        'direction',
        'token_coef',
        'email_verified_at',
        'created_at',
        'telegram_id',
        'quiz_is_done',
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
        'umt_frozen' => TokenAmountCast::class,
        'google_expires' => 'datetime',
        'gender' => Gender::class,
        'activity' => Activity::class,
        'level' => Level::class,
        'direction' => WeightDirection::class,
        'quiz_is_done' => 'boolean',
        'weight' => WeightCast::class,
        'height_dimension' => HeightDimension::class,
        'height' => HeightCast::class,
        'weight_dimension' => WeightDimension::class,
    ];

    protected $with = [];

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

    public function quiz(): HasOne
    {
        return $this->hasOne(Quiz::class);
    }
}
