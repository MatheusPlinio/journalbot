<?php

namespace App\Jobs;

use App\Models\Article;
use App\Services\EvolutionApiService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class BroadcastMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Article $article;

    /**
     * Cria a instância do Job.
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * Executa o Job.
     */
    public function handle(EvolutionApiService $evolutionApiService)
    {
        $category = $this->article->category;

        if (!$category) {
            Log::warning("Artigo sem categoria: {$this->article->id}");
            return;
        }

        $users = $category->users()
            ->role('client')
            ->whereNotNull('phone')
            ->get();

        if ($users->isEmpty()) {
            Log::info("Nenhum usuário inscrito na categoria {$category->name}");
            return;
        }

        $message = "*{$this->article->title}*\n\n{$this->article->summary}\n\n🔗 Leia mais: {$this->article->url}";

        foreach ($users as $user) {
            $evolutionApiService->sendText($user->phone, $message);
        }

        Log::info("Mensagem enviada para categoria {$category->name} ({$users->count()} usuários)");
    }
}
