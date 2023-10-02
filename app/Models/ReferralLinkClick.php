<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReferralLinkClick extends Model
{
    use HasFactory;

    protected $fillable = [
        'referral_link_id',
    ];

    public function link(): BelongsTo
    {
        return $this->belongsTo(ReferralLink::class);
    }
}
