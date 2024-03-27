<?php

namespace App\Filament\Resources\ChefsResource\Pages;

use App\Filament\Resources\ChefsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChefs extends ListRecords
{
    protected static string $resource = ChefsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
