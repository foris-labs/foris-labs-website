<?php

namespace App\Models;

use App\Enums\ExamBody;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class StudyPlan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'subject_id', 'exam', 'questions_per_day', 'started_at', 'ended_at'];

    protected $casts = [
        'exam' => ExamBody::class,
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function checkins(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'study_plan_checkins')
            ->using(StudyPlanCheckin::class)
            ->withPivot('score')
            ->withTimestamps();
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
