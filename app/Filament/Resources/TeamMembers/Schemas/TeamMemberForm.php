<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('Nom complet'))
                    ->required()
                    ->maxLength(255),
                TextInput::make('role')
                    ->label(__('Rôle / Poste'))
                    ->required()
                    ->maxLength(255),
                Textarea::make('bio')
                    ->label(__('Biographie courte'))
                    ->maxLength(65535)
                    ->columnSpanFull(),
                FileUpload::make('photo')
                    ->label(__('Photo de profil'))
                    ->image()
                    ->directory('team-photos'),
                Toggle::make('is_active')
                    ->label(__('Actif (visible sur le site)'))
                    ->required(),
                TextInput::make('sort_order')
                    ->label(__('Ordre d\'affichage'))
                    ->numeric()
                    ->default(0),
            ]);
    }
}
