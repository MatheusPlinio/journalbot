<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->maxLength(100),
                TextInput::make('phone')
                    ->label('Número WhatsApp')
                    ->required(),
                Toggle::make('is_active')
                    ->label('Ativo')
                    ->default(true),
                Select::make('categories')
                    ->label('Categorias')
                    ->multiple()
                    ->relationship('categories', 'name'),
            ]);
    }
}
