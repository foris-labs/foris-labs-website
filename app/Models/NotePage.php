<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NotePage extends Model
{

    protected $fillable = [
        'topic_id',
        'title',
        'order',
    ];

    public function topic(): BelongsTo
    {
        return $this->belongsTo(NoteTopic::class, 'topic_id');
    }

    public function nodes(): HasMany
    {
        return $this->hasMany(NoteNode::class, 'page_id');
    }
}
