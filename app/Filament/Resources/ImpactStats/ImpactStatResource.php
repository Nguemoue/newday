<?php

namespace App\Filament\Resources\ImpactStats;

use App\Filament\Resources\ImpactStats\Pages\CreateImpactStat;
use App\Filament\Resources\ImpactStats\Pages\EditImpactStat;
use App\Filament\Resources\ImpactStats\Pages\ListImpactStats;
use App\Filament\Resources\ImpactStats\Schemas\ImpactStatForm;
use App\Filament\Resources\ImpactStats\Tables\ImpactStatsTable;
use App\Models\ImpactStat;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ImpactStatResource extends Resource
{
    protected static ?string $model = ImpactStat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;

    protected static ?string $recordTitleAttribute = 'title';

    public static function getModelLabel(): string
    {
        return __('Statistique d\'Impact');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Statistiques d\'Impact');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Organisation');
    }

    public static function form(Schema $schema): Schema
    {
        return ImpactStatForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ImpactStatsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListImpactStats::route('/'),
            'create' => CreateImpactStat::route('/create'),
            'edit' => EditImpactStat::route('/{record}/edit'),
        ];
    }
}
