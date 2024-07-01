<?php

namespace App\Models;

use App\Enums\DifficultyLevel;
use App\Enums\ExamBody;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['body', 'difficulty_level', 'source_exam', 'source_year', 'subject_id'];

    protected $casts = [
        'source_exam' => ExamBody::class,
        'difficulty_level' => DifficultyLevel::class
    ];

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

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

}
