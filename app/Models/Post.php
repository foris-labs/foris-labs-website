<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; 

class Post extends Model
{
    use HasFactory;

    //Laravel Timestaps 
    public $timestamps = true;

    protected $fillable = [
        'title',
        'user_id',
        'slug',
        'body',
        'image_url',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });

        static::updating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }
    //user relationship to post
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(comments::class);
    }
}
