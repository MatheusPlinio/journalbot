<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Source;

class SyncGoogleNewsSources extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'news:sync-sources';

    /**
     * The console command description.
     */
    protected $description = 'Sincroniza e persiste fontes do Google News RSS';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('🔎 Buscando fontes do Google News...');

        $feeds = [
            'https://news.google.com/rss?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/TOP_STORIES?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/WORLD?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/NATION?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/BUSINESS?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/ECONOMY?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/FINANCE?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/MARKETS?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/TECHNOLOGY?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/SCIENCE?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/AI?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/CYBERSECURITY?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/HEALTH?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/MEDICINE?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/PUBLIC_HEALTH?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/SPORTS?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/SOCCER?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/FOOTBALL?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/BASKETBALL?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/FORMULA_ONE?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/ESPORTS?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/ENTERTAINMENT?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/CELEBRITIES?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/MOVIES?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/MUSIC?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/TV?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/POLITICS?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/GOVERNMENT?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/ELECTIONS?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/LAW?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/ENVIRONMENT?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/CLIMATE_CHANGE?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/ENERGY?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/CRIME?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/EDUCATION?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/HUMAN_RIGHTS?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/GAMING?hl=pt-BR&gl=BR&ceid=BR:pt-419',
            'https://news.google.com/rss/headlines/section/topic/VIDEO_GAMES?hl=pt-BR&gl=BR&ceid=BR:pt-419',
        ];

        $foundSources = [];

        foreach ($feeds as $feed) {
            try {
                $response = Http::timeout(15)->get($feed);

                if (!$response->ok()) {
                    $this->warn("⚠️ Falha ao acessar feed: {$feed}");
                    continue;
                }

                $xml = simplexml_load_string($response->body());

                if (!$xml || !isset($xml->channel->item)) {
                    continue;
                }

                foreach ($xml->channel->item as $item) {
                    if (isset($item->source)) {
                        $name = trim((string) $item->source);

                        if ($name !== '') {
                            $foundSources[] = $name;
                        }
                    }
                }
            } catch (\Throwable $e) {
                $this->warn("⚠️ Erro no feed: {$feed}");
                continue;
            }
        }

        $foundSources = array_values(array_unique($foundSources));

        $this->info('🧠 Fontes encontradas: ' . count($foundSources));

        $existing = Source::whereIn('name', $foundSources)
            ->pluck('name')
            ->toArray();

        $newSources = array_diff($foundSources, $existing);

        foreach ($newSources as $name) {
            Source::create([
                'name' => $name,
                'is_active' => true,
            ]);
        }

        $this->info('✅ Fontes já existentes: ' . count($existing));
        $this->info('🆕 Novas fontes inseridas: ' . count($newSources));
        $this->info('🎉 Sincronização concluída com sucesso!');

        return Command::SUCCESS;
    }
}
