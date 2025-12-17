<?php

namespace App\Jobs;

use App\Models\User;
use App\Services\EvolutionApiService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Log;

class ExpireUserSubscriptionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public int $userId,
        protected EvolutionApiService $evolutionApiService
    ) {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $user = User::find($this->userId);

        if (!$user) {
            Log::warning('ExpireUserSubscriptionJob: user not found', [
                'user_id' => $this->userId
            ]);
            return;
        }

        $user->update([
            'is_active' => false,
        ]);

        $this->evolutionApiService->sendText($user->phone, "Sua assinatura expirou");
    }
}
