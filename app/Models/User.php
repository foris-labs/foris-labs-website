<?php

namespace App\Models;

use App\Enums\Currency;
use App\Services\LeaderboardService;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

/*
 * @property int $rank
 */

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
        'socials->facebook', 'socials->google', 'currencies', 'metadata'
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
        'metadata' => 'array',
    ];

    public function trivias(): HasMany
    {
        return $this->hasMany(Trivia::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function avatars(): BelongsToMany
    {
        return $this->belongsToMany(Avatar::class)
            ->using(AvatarUser::class)
            ->withPivot('is_current');
    }

    public function currentAvatar(): HasOneThrough
    {
        return $this->hasOneThrough(Avatar::class, AvatarUser::class, 'user_id', 'id', 'id', 'avatar_id')
            ->where('is_current', true);
    }

    public function setCurrentAvatar(Avatar $avatar): void
    {
        $this->loadMissing('avatars');

        if (!$this->avatars->contains($avatar)) {
            $this->avatars()->attach($avatar->id, ['is_current' => true]);
        }

        foreach ($this->avatars as $userAvatar) {
            $userAvatar->pivot->is_current = $userAvatar->id === $avatar->id;
            $userAvatar->pivot->save();
        }
    }

    public function activities(): HasMany
    {
        return $this->hasMany(UserActivity::class);
    }

    public function feedbacks(): HasMany
    {
        return $this->hasMany(Feedback::class);
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
        return $this->isAdmin();
    }

    public function getFilamentAvatarUrl(): ?string
    {
        $this->loadMissing('currentAvatar');

        return asset("storage/avatars/{$this->currentAvatar?->image_url}");
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
