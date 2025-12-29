<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('role')
                    ->maxLength(255),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('photo')
                    ->image()
                    ->directory('testimonials-photos'),
                Toggle::make('is_featured')
                    ->required(),
            ]);
    }
}