<?php

namespace App\Filament\Resources\Carposts;

use App\Filament\Resources\Carposts\Pages\CreateCarpost;
use App\Filament\Resources\Carposts\Pages\EditCarpost;
use App\Filament\Resources\Carposts\Pages\ListCarposts;
use App\Filament\Resources\Carposts\Schemas\CarpostForm;
use App\Filament\Resources\Carposts\Tables\CarpostsTable;
use App\Models\Carpost;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CarpostResource extends Resource
{
    protected static ?string $model = Carpost::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Crs';

    public static function form(Schema $schema): Schema
    {
        return CarpostForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CarpostsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCarposts::route('/'),
            'create' => CreateCarpost::route('/create'),
            'edit' => EditCarpost::route('/{record}/edit'),
        ];
    }
}
