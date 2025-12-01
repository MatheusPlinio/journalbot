<?php

namespace App\Console\Commands;

use App\Jobs\FetchRssJob;
use App\Models\NewsSource;
use Illuminate\Console\Command;

class StartRssFetchingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:start-rss-fetching';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatches jobs to fetch RSS feeds for all active sources';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sources = NewsSource::where('is_active', true)->get();

        if ($sources->isEmpty()) {
            $this->info('No active news sources found.');
            return;
        }

        $this->info("Found {$sources->count()} active sources. Dispatching jobs...");

        foreach ($sources as $source) {
            FetchRssJob::dispatch($source)->onQueue('default');
            $this->info("Dispatched FetchRssJob for: {$source->name}");
        }

        $this->info('All jobs dispatched.');
    }
}
