<?php

namespace App\Filament\Resources\Carposts\Pages;

use App\Filament\Resources\Carposts\CarpostResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCarpost extends ViewRecord
{
    protected static string $resource = CarpostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
