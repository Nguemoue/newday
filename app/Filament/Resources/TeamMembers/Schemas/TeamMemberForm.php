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
                    ->required()
                    ->maxLength(255),
                TextInput::make('role')
                    ->required()
                    ->maxLength(255),
                Textarea::make('bio')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                FileUpload::make('photo')
                    ->image()
                    ->directory('team-photos'),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}