<?php

namespace App\Jobs;

use App\Models\BroadcastMessage;
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

    public BroadcastMessage $broadcastMessage;

    /**
     * Cria a instância do Job.
     */
    public function __construct(BroadcastMessage $broadcastMessage)
    {
        $this->broadcastMessage = $broadcastMessage;
    }

    /**
     * Executa o Job.
     */
    public function handle(EvolutionApiService $evolutionApiService)
    {
        $article = $this->broadcastMessage->article;
        $category = $article->category;

        if (!$category) {
            Log::warning("Artigo sem categoria: {$article->id}");
            return;
        }

        $users = $category
            ->users()
            ->role("client")
            ->whereNotNull("phone")
            ->get();

        if ($users->isEmpty()) {
            Log::info("Nenhum usuário inscrito na categoria {$category->name}");
            return;
        }

        $message = $this->broadcastMessage->message_text;
        $sentCount = 0;

        foreach ($users as $user) {
            if ($evolutionApiService->sendText($user->phone, $message, true)) {
                $sentCount++;
            }
        }

        if ($sentCount > 0) {
            $this->broadcastMessage->update([
                'sent_at' => now(),
            ]);
        }

        Log::info(
            "Mensagem enviada para categoria {$category->name} ({$sentCount}/{$users->count()} usuários)",
        );
    }
}
