<?php

namespace App\Filament\Resources\ServisesResource\Pages;

use App\Filament\Resources\ServisesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServises extends ListRecords
{
    protected static string $resource = ServisesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
