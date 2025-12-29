<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('Nom du partenaire'))
                    ->required()
                    ->maxLength(255),
                FileUpload::make('logo')
                    ->label(__('Logo'))
                    ->image()
                    ->directory('partners-logos'),
                TextInput::make('website')
                    ->label(__('Site Web'))
                    ->url()
                    ->maxLength(255),
                Toggle::make('is_active')
                    ->label(__('Actif'))
                    ->required(),
            ]);
    }
}
