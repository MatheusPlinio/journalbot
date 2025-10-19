<?php

namespace App\Filament\Resources\NewsSources\Pages;

use App\Filament\Resources\NewsSources\NewsSourceResource;
use App\Jobs\FetchRssJob;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsSource extends CreateRecord
{
    protected static string $resource = NewsSourceResource::class;

    protected function afterCreate(): void
    {
        FetchRssJob::dispatch($this->record);
    }
}
