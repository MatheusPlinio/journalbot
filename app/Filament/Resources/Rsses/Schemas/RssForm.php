<?php

namespace App\Filament\Resources\Rsses\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class RssForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Source Rss")->components([
                    Select::make("category_id")
                        ->relationship("category", "name")
                        ->required(),
                    TextInput::make("link")
                        ->required(),
                ])
            ]);
    }
}
