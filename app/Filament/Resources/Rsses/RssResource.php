<?php

namespace App\Filament\Resources\Rsses;

use App\Filament\Resources\Rsses\Pages\CreateRss;
use App\Filament\Resources\Rsses\Pages\EditRss;
use App\Filament\Resources\Rsses\Pages\ListRsses;
use App\Filament\Resources\Rsses\Pages\ViewRss;
use App\Filament\Resources\Rsses\Schemas\RssForm;
use App\Filament\Resources\Rsses\Schemas\RssInfolist;
use App\Filament\Resources\Rsses\Tables\RssesTable;
use App\Models\Rss;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RssResource extends Resource
{
    protected static ?string $model = Rss::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Rss';

    public static function form(Schema $schema): Schema
    {
        return RssForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return RssInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RssesTable::configure($table);
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
            'index' => ListRsses::route('/'),
            'create' => CreateRss::route('/create'),
            'view' => ViewRss::route('/{record}'),
            'edit' => EditRss::route('/{record}/edit'),
        ];
    }
}
