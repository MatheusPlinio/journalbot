<?php

namespace App\Filament\Resources\Rsses\Pages;

use App\Filament\Resources\Rsses\RssResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewRss extends ViewRecord
{
    protected static string $resource = RssResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
