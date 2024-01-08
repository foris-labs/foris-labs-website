<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'meta',
    ];

    protected $casts = [
        'meta' => 'array',
    ];

    public function achievements(): BelongsToMany
    {
        return $this->belongsToMany(Achievement::class)
            ->withPivot('completion_count', 'is_consecutive', 'consecutive_interval');
    }
}
