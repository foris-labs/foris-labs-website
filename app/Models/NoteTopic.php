<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NoteTopic extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'title',
        'order',
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(NoteTopicGroup::class, 'group_id');
    }

    public function pages(): HasMany
    {
        return $this->hasMany(NotePage::class, 'topic_id');
    }
}
