<?php

namespace App\Jobs;

use App\Models\PixPayment;
use App\Jobs\ExpireUserSubscriptionJob;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessApprovedPaymentJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(protected string $paymentId)
    {
    }

    public function handle(): void
    {
        try {
            $pixPayment = PixPayment::where('transaction_id', $this->paymentId)->first();

            if (!$pixPayment || $pixPayment->status === 'approved') {
                return;
            }

            $pixPayment->update(['status' => 'approved']);

            $invoice = $pixPayment->invoice;
            $user = optional($invoice)->user;
            $plan = optional($invoice)->plan;
            $durationDays = $plan ? $plan->duration_days : 30;

            $expiresAt = Carbon::now()->addDays($durationDays);

            optional($user)->update([
                'is_active' => true,
                'subscription_expires_at' => $expiresAt
            ]);

            if ($user) {
                ExpireUserSubscriptionJob::dispatch($user->id)->delay($expiresAt);
            }

        } catch (\Throwable $e) {
            Log::error('Erro ao processar pagamento aprovado', [
                'payment_id' => $this->paymentId,
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }
}
