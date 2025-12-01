<?php

namespace App\Filament\Resources\Prompts\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PromptForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make("category_id")
                ->relationship("category", "name")
                ->required()
                ->searchable()
                ->preload(),
            TextInput::make("type")->required()->default("summary"),
            Textarea::make("prompt")->required()->columnSpanFull(),
        ]);
    }
}
