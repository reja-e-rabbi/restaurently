<?php

namespace App\Filament\Resources\TablebookResource\Pages;

use App\Filament\Resources\TablebookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTablebook extends EditRecord
{
    protected static string $resource = TablebookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
