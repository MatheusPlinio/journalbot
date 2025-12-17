<?php

namespace App\Filament\Resources\Rsses\Pages;

use App\Filament\Resources\Rsses\RssResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRsses extends ListRecords
{
    protected static string $resource = RssResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
