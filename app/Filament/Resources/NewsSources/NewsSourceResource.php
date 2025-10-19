<?php

namespace App\Filament\Resources\NewsSources;

use App\Filament\Resources\NewsSources\Pages\CreateNewsSource;
use App\Filament\Resources\NewsSources\Pages\EditNewsSource;
use App\Filament\Resources\NewsSources\Pages\ListNewsSources;
use App\Filament\Resources\NewsSources\Schemas\NewsSourceForm;
use App\Filament\Resources\NewsSources\Tables\NewsSourcesTable;
use App\Models\NewsSource;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NewsSourceResource extends Resource
{
    protected static ?string $model = NewsSource::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'newssource';

    public static function form(Schema $schema): Schema
    {
        return NewsSourceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NewsSourcesTable::configure($table);
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
            'index' => ListNewsSources::route('/'),
            'create' => CreateNewsSource::route('/create'),
            'edit' => EditNewsSource::route('/{record}/edit'),
        ];
    }
}
