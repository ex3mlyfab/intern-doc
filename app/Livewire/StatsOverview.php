<?php

namespace App\Livewire;

use App\Models\InternDoctor;
use App\Models\PostingRecord;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected int | string | array $columnSpan = [
        'md' => 1,
        'lg' => 2,
    ];

    protected function getStats(): array
    {
        return [
            Stat::make('No of Interns', InternDoctor::query()->whereNot('intern_status', 2)->count())
                ->color('success')
                ->extraAttributes([
                    'class' => 'cursor-pointer bg-indigo-400 w-100',]),                
            Stat::make('Obs & Gyn Posting', PostingRecord::query()->where('department_id', 2)->where('posting_status', 1)->count())
                ->color('900:blue'),
            Stat::make('Internal Medicine Posting', PostingRecord::query()->where('department_id', 3)->where('posting_status', 1)->count())
                ->color('danger'),
            Stat::make('Surgery Posting', PostingRecord::query()->where('department_id', 4)->where('posting_status', 1)->count()),
            Stat::make('Paediatrics Posting', PostingRecord::query()->where('department_id', 5)->where('posting_status', 1)->count()),
        ];
    }
}
