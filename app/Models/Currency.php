<?php

namespace App\Models;

use App\Enum\Interval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Currency extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'code', 'description', 'can_recharge', 'recharge_amount', 'recharge_interval', 'recharge_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'can_recharge' => 'boolean',
        'recharge_interval' => Interval::class,
        'recharge_at' => 'timestamp',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('balance');
    }

}
