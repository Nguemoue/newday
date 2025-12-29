<?php

namespace App\Filament\Resources\SocialLinks\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

class SocialLinkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('platform')
                    ->options([
                        'Facebook' => 'Facebook',
                        'LinkedIn' => 'LinkedIn',
                        'Twitter' => 'Twitter / X',
                        'Instagram' => 'Instagram',
                        'WhatsApp' => 'WhatsApp',
                        'Telegram' => 'Telegram',
                        'YouTube' => 'YouTube',
                        'TikTok' => 'TikTok',
                    ])
                    ->required()
                    ->searchable(),
                TextInput::make('url')
                    ->label('Lien URL')
                    ->url()
                    ->required()
                    ->placeholder('https://facebook.com/newday')
                    ->maxLength(255),
                TextInput::make('username')
                    ->label("Nom d'utilisateur (affiché)")
                    ->placeholder('@newday_cm')
                    ->maxLength(255),
                TextInput::make('sort_order')
                    ->label('Ordre')
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->label('Actif')
                    ->default(true)
                    ->required(),
            ]);
    }
}
