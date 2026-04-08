<?php

namespace App\Filament\Resources\Carposts\Pages;

use App\Filament\Resources\Carposts\CarpostResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCarpost extends EditRecord
{
    protected static string $resource = CarpostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
