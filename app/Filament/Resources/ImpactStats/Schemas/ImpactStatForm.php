<?php

namespace App\Filament\Resources\ImpactStats\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class ImpactStatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('value')
                    ->required()
                    ->maxLength(255),
                TextInput::make('description')
                    ->maxLength(255),
                TextInput::make('icon')
                    ->maxLength(255),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}