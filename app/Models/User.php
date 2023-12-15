<?php

namespace App\Models;

use App\Enum\Currency;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements FilamentUser, HasAvatar
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'username', 'email', 'gender', 'password', 'avatar_url',
        'socials->facebook', 'socials->google', 'currencies',
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
        'social_data' => 'array',
        'currencies' => 'array',
    ];

    public static function booting(): void
    {
        static::creating(function ($user) {
            if (empty($user->username)) {
                $user->username = explode('@', $user->email)[0];
            }
            if (empty($user->currencies)) {
                $user->currencies = [
                    Currency::LAB_CREDITS->value => 0,
                    Currency::FORIS_POINTS->value => 0,
                ];
            }
        });
    }

    public function trivias(): HasMany
    {
        return $this->hasMany(Trivia::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function activeSubscription(): HasOne
    {
        return $this->hasOne(Subscription::class)->ofMany([], function (Builder $query) {
            $query->where('ended_at', '<', now());
        });
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@forislabs.com');
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return asset('storage/' . $this->avatar_url);
    }
}
