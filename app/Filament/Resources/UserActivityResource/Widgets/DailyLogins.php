<?php

namespace App\Filament\Resources\UserActivityResource\Widgets;

use App\Enums\Activity;
use App\Models\UserActivity;
use Filament\Widgets\ChartWidget;

class DailyLogins extends ChartWidget
{
    public ?string $filter = '7';

    protected static ?string $heading = 'Daily Logins';

    protected function getData(): array
    {
        $subDays = (int)$this->filter;

//        $userActivities = UserActivity::query()
//            ->where('activity', Activity::LoginToAccount)
//            ->where('performed_at', '>=', now()->subDays($subDays))
//            ->selectRaw('
//                DATE(dates.date) as date,
//                COUNT(user_activities.id) as count
//            ')
//            ->groupBy('date')
//            ->orderBy('date')
//            ->get();

        $userActivities = \DB::table(\DB::raw('(SELECT CURDATE() - INTERVAL a DAY AS date FROM (SELECT ROW_NUMBER() OVER (ORDER BY NULL) - 1 as a FROM information_schema.columns LIMIT ' . $subDays . ') as a) as dates'))
            ->leftJoin('user_activities', function ($join) {
                $join->on(\DB::raw('DATE(user_activities.performed_at)'), '=', 'dates.date')
                    ->where('user_activities.activity', Activity::LoginToAccount);
            })
            ->selectRaw('
                dates.date as date,
                COUNT(user_activities.activity) as count
            ')
            ->groupBy('dates.date')
            ->orderBy('dates.date')
            ->get();


        return [
            'labels' => $userActivities->pluck('date')->transform(fn(string $date) => date('M j', strtotime($date)))->toArray(),
            'datasets' => [
                [
                    'label' => 'Logins',
                    'data' => $userActivities->pluck('count')->toArray(),
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
            ],
            'fill' => 'start',
            'scale' => [
                'ticks' => [
                    'precision' => 0,
                ]
            ]
        ];
    }

    protected function getFilters(): ?array
    {
        return [
            '7' => 'Last 7 days',
            '14' => 'Last 2 weeks',
            '30' => 'Last 1 month',
            '90' => 'Last 3 months',
        ];
    }
}
