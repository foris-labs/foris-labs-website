<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    public $timestamps = true;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
