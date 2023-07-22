<?php

namespace App\Filament\Resources\FaucetResource\Widgets;

use App\Models\Faucet;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class FaucetChart extends LineChartWidget
{
    protected function getHeading(): string
    {
        return '签到情况';
    }

    protected function getData(): array
    {
        $data = Trend::model(Faucet::class)
            ->between(
                start: now()->addMonths(-6),
                end: now(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => '签到人数',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];

    }
}
