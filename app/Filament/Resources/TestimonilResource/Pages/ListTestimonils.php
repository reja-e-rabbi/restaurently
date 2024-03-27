<?php

namespace App\Filament\Resources\TestimonilResource\Pages;

use App\Filament\Resources\TestimonilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonils extends ListRecords
{
    protected static string $resource = TestimonilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
