<?php

namespace App\Filament\Resources\CompletionResource\Widgets;

use App\Models\Completion;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\LineChartWidget;

class CompletionCharts extends LineChartWidget
{
    protected function getHeading(): string
    {
        return 'Token 消耗';
    }
    protected function getData(): array
    {
        $data = Trend::model(Completion::class)
            ->between(
                start: now()->addDays(-10),
                end: now(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Token 消耗情况',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
