<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['body'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['options'];

    public function options(): HasMany
    {
        return $this->hasMany(Option::class)->inRandomOrder();
    }

}
