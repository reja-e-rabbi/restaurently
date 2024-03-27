<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\TableBook;
use App\Models\Message;
use App\Models\Testimonil;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Table Shedule', TableBook::where('statuses', 'shedule')->count())
            ->description('Number of tables has been reserved')
            ->chart([1,4,8,16,20]),
            Stat::make('Table Reserve Request', TableBook::where('statuses', 'active')->count())
            ->description('Number of tables request to reserve by Customer')
            ->chart([1,4,8,16,20]),
            Stat::make('Message', TableBook::where('statuses', 'active')->count())
            ->description('Number of message send by customer')
            ->chart([1,4,8,16,20]),
            Stat::make('Testimonil', Testimonil::count())
            ->description('Number of Testimonil send by customer')
            ->chart([1,4,8,16,20]),
        ];
    }
}
