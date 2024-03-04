<?php

namespace App\Filament\Resources\UserActivityResource\Widgets;

use App\Enums\Activity;
use App\Models\UserActivity;
use Filament\Widgets\ChartWidget;
use Illuminate\Contracts\Support\Htmlable;

class TopUsedEquipments extends ChartWidget
{
    public ?string $filter = '6';

    protected function getData(): array
    {
        $count = (int)$this->filter;

        $activities = collect(Activity::cases())
            ->filter(fn(Activity $activity) => str_starts_with($activity->name, 'Use'))
            ->take($count)
            ->values();

        $userActivities = UserActivity::query()
            ->whereIn('activity', $activities)
            ->selectRaw('
                SUBSTRING_INDEX(activity, "_", -1) as activity,
                COUNT(*) as count
            ')
            ->groupBy('activity')
            ->orderByDesc('count')
            ->get();

        return [
            'labels' => $userActivities->pluck('activity')->transform(fn(string $activity) => ucfirst($activity))->toArray(),
            'datasets' => [
                [
                    'label' => 'Usage',
                    'data' => $userActivities->pluck('count')->toArray(),
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
            ],
        ];
    }

    public function getHeading(): string|Htmlable|null
    {
       return "Top $this->filter Used Equipments";
    }

    protected function getFilters(): ?array
    {
        return [
            '6' => '6',
            '8' => '8',
            '10' => '10',
            '12' => '12',
        ];
    }
}
