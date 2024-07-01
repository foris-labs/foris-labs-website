<?php

namespace App\Models;

use App\Enums\NodeType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NoteNode extends Model
{
    protected $fillable = ['page_id', 'type', 'body', 'order'];

    protected $casts = [
        'type' => NodeType::class,
        'body' => 'array',
    ];

    public function page(): BelongsTo
    {
        return $this->belongsTo(NotePage::class, 'page_id');
    }
}
