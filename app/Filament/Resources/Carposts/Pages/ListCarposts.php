<?php

namespace App\Filament\Resources\Carposts\Pages;

use App\Filament\Resources\Carposts\CarpostResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCarposts extends ListRecords
{
    protected static string $resource = CarpostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
