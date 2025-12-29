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
                    ->label(__('Titre (ex: Personnes formées)'))
                    ->required()
                    ->maxLength(255),
                TextInput::make('value')
                    ->label(__('Valeur (ex: 125+)'))
                    ->required()
                    ->maxLength(255),
                TextInput::make('description')
                    ->label(__('Description courte'))
                    ->maxLength(255),
                TextInput::make('icon')
                    ->label(__('Icône'))
                    ->maxLength(255),
                TextInput::make('sort_order')
                    ->label(__('Ordre d\'affichage'))
                    ->numeric()
                    ->default(0),
            ]);
    }
}
