<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];

    public function coupons() : HasMany
    {
        return $this->hasMany(Coupon::class);
    }

    public function students() : HasMany
    {
        return $this->hasMany(User::class);
    }
}
