<?php

namespace App\Jobs;

use App\Models\Article;
use App\Models\BroadcastMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Log;

class ProcessNewsSummaryJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Article $article)
    {

    }
    public function handle(): void
    {
        try {
            $category = $this->article->category;
            if (!$category) {
                Log::warning("Artigo sem categoria: {$this->article->id}");
                return;
            }

            $author = $this->article->author ?? 'Da Redação';

            $summary = strip_tags($this->article->summary);
            $summary = mb_strimwidth($summary, 0, 300, "...");

            $messageText = "*{$this->article->title}*\n\n";
            $messageText .= "📌 Categoria: {$category->name}\n\n";
            $messageText .= "🔗 Leia mais: {$this->article->link}";

            $broadcastMessage = BroadcastMessage::create([
                'article_id' => $this->article->id,
                'message_text' => $messageText,
                'sent_at' => null,
            ]);

            BroadcastMessageJob::dispatch($broadcastMessage)->onQueue('broadcasts');

        } catch (\Throwable $e) {
            Log::error("Erro ao processar notícia {$this->article->id}: " . $e->getMessage());
        }
    }

    private function sanitizeUtf8(string $text): string
    {
        $text = mb_convert_encoding($text, 'UTF-8', 'UTF-8');
        $text = iconv('UTF-8', 'UTF-8//IGNORE', $text);
        $text = preg_replace('/[^\P{C}\n]+/u', '', $text);
        return trim($text);
    }
}
