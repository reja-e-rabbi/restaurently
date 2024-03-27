<?php

namespace App\Filament\Resources\ServisesResource\Pages;

use App\Filament\Resources\ServisesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServises extends EditRecord
{
    protected static string $resource = ServisesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
