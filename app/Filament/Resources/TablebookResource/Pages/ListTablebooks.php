<?php

namespace App\Filament\Resources\TablebookResource\Pages;

use App\Filament\Resources\TablebookResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTablebooks extends ListRecords
{
    protected static string $resource = TablebookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
