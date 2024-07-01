<?php

namespace App\Filament\Resources\QuestionResource\Widgets;

use App\Models\Question;
use App\Models\Subject;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $subjects = Subject::all();

        $stats = Question::groupBy('subject_id')
            ->selectRaw('count(*) as count, subject_id')
            ->get();

        $statWidgets = $stats->map(function ($item) use ($subjects) {
            $subject = $subjects->firstWhere('id', $item->subject_id);
            return Stat::make($subject->name, $item['count'])
                ->color($subject->color)
                ->description("No of {$subject->name} questions");
        });

        return $statWidgets->toArray();
    }
}
