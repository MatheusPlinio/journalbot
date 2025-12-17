<?php

namespace App\Filament\Resources\Rsses\Pages;

use App\Filament\Resources\Rsses\RssResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditRss extends EditRecord
{
    protected static string $resource = RssResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
