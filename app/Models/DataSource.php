<?php

namespace App\Models;

use App\Enums\DataSourceType;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataSource extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'login',
        'type',
        'data',
        'is_active',
    ];

    protected $hidden = [
        'data',
    ];

    protected function casts(): array
    {
        return [
            'type' => DataSourceType::class,
            'data' => AsArrayObject::class,
            'is_active' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
