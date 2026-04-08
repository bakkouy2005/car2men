<?php

namespace App\Filament\Resources\Carposts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CarpostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('seller_id')
                    ->relationship('seller', 'name')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('cars'),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('brand')
                    ->required(),
                TextInput::make('model')
                    ->required(),
                TextInput::make('build_year')
                    ->required()
                    ->numeric(),
                TextInput::make('kilometer')
                    ->required()
                    ->numeric(),
                TextInput::make('horsepower')
                    ->required()
                    ->numeric(),
                TextInput::make('previous_owners')
                    ->required()
                    ->numeric(),
                TextInput::make('status')
                    ->required(),
            ]);
    }
}
