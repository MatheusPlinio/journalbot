<?php

use App\Models\Rss;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::job(function () {
    $sources = Rss::all();
    foreach ($sources as $source) {
        $response = Http::withToken(config("services.webhook_n8n.token"))->get(config("services.webhook_n8n.url") . "?categoria=" . $source->category->name . "&rss=" . $source->link);
        Log::info('Response Job', [
            'status' => $response->status(),
            'body' => $response->json(),
        ]);
    }
})->everyFifteenMinutes()->withoutOverlapping()->onOneServer();