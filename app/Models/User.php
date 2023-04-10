<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'username', 'email', 'gender', 'password', 'avatar_url', 'social_data->facebook', 'social_data->google'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'social_data' => 'array'
    ];

    public function school() : BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function subscriptions() : HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function activeSuscription() : HasOne
    {
        return $this->hasOne(Subscription::class)->ofMany([], function (Builder $query) {
            $query->where('ended_at', '<', now());
        });
    }

}
