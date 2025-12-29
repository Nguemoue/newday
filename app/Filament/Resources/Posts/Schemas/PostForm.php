<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;
use Filament\Forms\Set;

class PostForm
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
                Textarea::make('excerpt')
                    ->label(__('Extrait'))
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->label(__('Contenu'))
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label(__('Image à la une'))
                    ->image()
                    ->directory('posts-images'),
                DateTimePicker::make('published_at')
                    ->label(__('Date de publication')),
                Toggle::make('is_featured')
                    ->label(__('Mettre en avant'))
                    ->required(),
            ]);
    }
}
