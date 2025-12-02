<?php

namespace App\Filament\Resources\NewsSources\Schemas;

use App\Models\Category;
use App\Models\SourceProvider;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class NewsSourceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Informações")->components(
                    [
                        Select::make('source_provider_id')
                            ->label('Fonte Provedora')
                            ->relationship('source_provider', 'name')
                            ->searchable()
                            ->options(SourceProvider::all()->pluck('name', 'id'))
                            ->required(),
                        TextInput::make('url')
                            ->label('URL RSS ou API')
                            ->required()
                            ->url(),
                        Select::make('category_id')
                            ->label('Categoria')
                            ->relationship('category', 'name')
                            ->options(Category::all()->pluck('name', 'id'))
                            ->searchable()
                            ->required(),
                        Toggle::make('is_active')
                            ->label('Ativo')
                            ->default(true),
                    ]
                )
            ]);
    }
}
