<?php

namespace App\Filament\Resources\Programs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Str;
use Filament\Forms\Set;

class ProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label(__('Titre'))
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->maxLength(255),
                TextInput::make('slug')
                    ->label(__('Slug (URL)'))
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->label(__('Description courte'))
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->label(__('Contenu détaillé'))
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label(__('Image de couverture'))
                    ->image()
                    ->directory('programs-images'),
                TextInput::make('icon')
                    ->label(__('Icône (classe CSS ou SVG)'))
                     ->maxLength(255),
            ]);
    }
}
