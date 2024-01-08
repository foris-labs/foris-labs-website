<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'is_active', 'reward', 'meta',
    ];

    protected $casts = [
        'reward' => 'array',
        'meta' => 'array',
    ];

    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(Activity::class)
            ->withPivot('completion_count', 'is_consecutive', 'consecutive_interval');
    }
}
