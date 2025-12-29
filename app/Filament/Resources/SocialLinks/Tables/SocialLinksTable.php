<?php

namespace App\Filament\Resources\SocialLinks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class SocialLinksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('platform')
                    ->label('Plateforme')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Facebook' => 'info',
                        'LinkedIn' => 'info',
                        'Instagram' => 'danger',
                        'WhatsApp' => 'success',
                        default => 'gray',
                    }),
                TextColumn::make('username')
                    ->label('Utilisateur')
                    ->searchable(),
                TextColumn::make('url')
                    ->limit(30)
                    ->icon('heroicon-m-link'),
                ToggleColumn::make('is_active')
                    ->label('Actif'),
                TextColumn::make('sort_order')
                    ->label('Ordre')
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
