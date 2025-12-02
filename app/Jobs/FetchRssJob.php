<?php

namespace App\Jobs;

use App\Models\Article;
use App\Models\NewsSource;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Log;
use Str;
use Carbon\Carbon;

class FetchRssJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public NewsSource $source)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::info("Iniciando FetchRssJob para: {$this->source->name}");
        try {
            $response = Http::get($this->source->url);

            if ($response->failed()) {
                throw new Exception("Falha ao buscar RSS: {$this->source->url}");
            }

            $xml = simplexml_load_string($response->body());
            if (!$xml || !isset($xml->channel->item)) {
                throw new Exception("RSS inválido ou vazio: {$this->source->url}");
            }

            $newArticles = [];

            foreach ($xml->channel->item as $item) {
                $namespaces = $xml->getNamespaces(true);
                $dc = $item->children($namespaces['dc'] ?? null);
                $author = (string) ($dc->creator ?? $item->author ?? 'Desconhecido');

                $title = (string) $item->title;
                $link = (string) $item->link;
                $summary = (string) $item->description ?? '';
                $pubDate = Carbon::parse((string) $item->pubDate, 'America/Sao_Paulo')->utc();

                if (Article::where('title', $title)->orWhere('slug', Str::slug($title))->exists()) {
                    continue;
                }

                $article = Article::create([
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'summary' => $summary,
                    'author' => $author,
                    'content' => $summary,
                    'link' => $link,
                    'category_id' => $this->source->category_id,
                    'published_at' => $pubDate,
                ]);

                $newArticles[] = $article;
            }

            Log::info("Encontrados " . count($newArticles) . " novos artigos para {$this->source->name}");

            foreach ($newArticles as $article) {
                if ($article->published_at && $article->published_at->gt(now()->subHour())) {
                    ProcessNewsSummaryJob::dispatch($article)
                        ->onQueue('ai');
                }
            }
        } catch (\Throwable $e) {
            Log::error("Erro no FetchRssJob ({$this->source->name}): " . $e->getMessage());
        } finally {
            Log::info("Reagendando FetchRssJob para {$this->source->name} em 10 minutos.");
            self::dispatch($this->source)
                ->delay(now()->addMinutes(10))
                ->onQueue('default');
        }
    }
}
