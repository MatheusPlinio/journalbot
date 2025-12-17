<?php

namespace App\Jobs;

use App\Models\User;
use App\Services\EvolutionApiService;
use Cache;
use Http;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Log;
use Str;

class SendWhatsappNews implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    public $backoff = 10;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public User $client,
        public array $news
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(EvolutionApiService $evolutionApiService): void
    {
        if (!$this->client->phone) {
            return;
        }

        try {
            $evolutionApiService->sendText($this->client->phone, $this->formatMessage());
        } catch (\Throwable $e) {
            Log::error('Erro ao enviar WhatsApp', [
                'user_id' => $this->client->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    private function formatMessage(): string
    {
        $originalUrl = $this->extractOriginalUrl($this->news['link']);
        $shortUrl = $this->generateShortLink($originalUrl);

        return <<<MSG
📰 *{$this->news['title']}*

{$this->news['description']}

🔗 Leia mais:
{$shortUrl}
MSG;
    }


    private function generateShortLink(string $url): string
    {
        do {
            $hash = Str::random(6);
        } while (Cache::has("newsbot:short:$hash"));

        Cache::put(
            "newsbot:short:$hash",
            $url,
            now()->addDays(7)
        );

        return config("app.url") . "/$hash";
    }

    private function extractOriginalUrl(string $googleNewsUrl): string
    {
        try {
            $response = Http::timeout(5)->get($googleNewsUrl);

            if (!$response->ok()) {
                return $googleNewsUrl;
            }

            preg_match(
                '/<link rel="canonical" href="([^"]+)"/',
                $response->body(),
                $matches
            );

            return $matches[1] ?? $googleNewsUrl;
        } catch (\Throwable) {
            return $googleNewsUrl;
        }
    }

}

