<?php

namespace App\Filament\Resources\TestimonilResource\Pages;

use App\Filament\Resources\TestimonilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonil extends EditRecord
{
    protected static string $resource = TestimonilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
