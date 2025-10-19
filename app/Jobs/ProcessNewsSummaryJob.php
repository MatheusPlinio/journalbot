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

    /**
     * Create a new job instance.
     */
    public function __construct(public Article $article)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $summary = $this->sanitizeUtf8($this->article->content);

            $this->article->update([
                'summary' => mb_convert_encoding($summary, 'UTF-8', 'auto'),
            ]);

            BroadcastMessage::create([
                'article_id' => $this->article->id,
                'message_text' => "🗞️ *{$this->article->title}*\n\n{$summary}\n\nLeia mais em: {$this->article->slug}",
                'sent_at' => null,
            ]);

            BroadcastMessageJob::dispatch($this->article)->onQueue('broadcasts');
        } catch (\Throwable $e) {
            Log::error("Erro ao processar resumo da notícia {$this->article->id}: " . $e->getMessage());
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
