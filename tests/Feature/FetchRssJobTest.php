<?php

namespace Tests\Feature;

use App\Jobs\FetchRssJob;
use App\Jobs\ProcessNewsSummaryJob;
use App\Models\Article;
use App\Models\Category;
use App\Models\NewsSource;
use App\Models\SourceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

class FetchRssJobTest extends TestCase
{
    use RefreshDatabase;

    public function test_fetches_rss_and_dispatches_job_only_for_recent_news()
    {
        Queue::fake();

        $category = Category::create(['name' => 'Tech', 'slug' => 'tech']);
        $provider = SourceProvider::create(['name' => 'TechCrunch', 'slug' => 'techcrunch']);
        $source = NewsSource::create([
            'url' => 'https://techcrunch.com/feed/',
            'category_id' => $category->id,
            'source_provider_id' => $provider->id,
            'is_active' => true,
        ]);

        $recentDate = now()->subMinutes(10)->toRssString();
        $oldDate = now()->subHours(2)->toRssString();

        $rssContent = <<<XML
<rss version="2.0">
<channel>
    <title>TechCrunch</title>
    <item>
        <title>Recent News</title>
        <link>https://techcrunch.com/recent</link>
        <description>Recent news description</description>
        <pubDate>$recentDate</pubDate>
    </item>
    <item>
        <title>Old News</title>
        <link>https://techcrunch.com/old</link>
        <description>Old news description</description>
        <pubDate>$oldDate</pubDate>
    </item>
</channel>
</rss>
XML;

        Http::fake([
            'https://techcrunch.com/feed/' => Http::response($rssContent, 200),
        ]);

        (new FetchRssJob($source))->handle();

        $this->assertDatabaseHas('articles', ['title' => 'Recent News']);
        $this->assertDatabaseHas('articles', ['title' => 'Old News']);

        Queue::assertPushed(ProcessNewsSummaryJob::class, function ($job) {
            return $job->article->title === 'Recent News';
        });

        Queue::assertNotPushed(ProcessNewsSummaryJob::class, function ($job) {
            return $job->article->title === 'Old News';
        });
    }
}
