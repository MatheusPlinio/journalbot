<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\ExpireUserSubscriptionJob;
use App\Models\PixPayment;
use App\Services\Contracts\MercadoPagoInterfaceService;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MercadoPagoWebhookController extends Controller
{
    public function __construct(
        protected MercadoPagoInterfaceService $mercadoPagoService
    ) {
    }

    public function handle(Request $request): JsonResponse
    {
        if (!$this->isValidSignature($request)) {
            Log::warning('Mercado Pago webhook with invalid signature', $request->headers->all());
            return response()->json(['error' => 'Invalid signature'], 401);
        }

        $data = $request->all();
        Log::info('Mercado Pago Webhook received', $data);

        if (($data['type'] ?? null) !== 'payment') {
            return response()->json(['status' => 'ignored'], 200);
        }

        $paymentId = $data['data']['id'] ?? null;
        if (!$paymentId) {
            return response()->json(['status' => 'error', 'message' => 'Payment ID not found'], 400);
        }

        $paymentInfo = $this->mercadoPagoService->getPayment($paymentId);

        if (isset($paymentInfo['error'])) {
            Log::error('Error fetching payment info', $paymentInfo);
            return response()->json(['status' => 'error', 'message' => 'Could not fetch payment info'], 500);
        }

        if ($paymentInfo['status'] === 'approved') {
            $this->processApprovedPayment($paymentId);
        }

        return response()->json(['status' => 'success'], 200);
    }

    private function isValidSignature(Request $request): bool
    {
        $signature = $request->header('X-Signature');
        $requestId = $request->header('X-Request-Id');

        if (!$signature || !$requestId) {
            return false;
        }

        $secret = config('services.mercadopago.webhook_secret');
        $payload = $request->getContent();

        $expectedSignature = hash_hmac('sha256', $payload . $requestId, $secret);

        return hash_equals($expectedSignature, $signature);
    }

    private function processApprovedPayment(string $paymentId): void
    {
        $pixPayment = PixPayment::where('transaction_id', $paymentId)->first();

        if (!$pixPayment || $pixPayment->status === 'approved') {
            return;
        }

        $pixPayment->update(['status' => 'approved']);

        $invoice = $pixPayment->invoice;
        if (!$invoice) {
            return;
        }

        $invoice->update(['status' => 'paid']);

        $user = $invoice->user;
        if (!$user) {
            return;
        }

        $plan = $invoice->plan;
        $durationDays = $plan ? $plan->duration_days : 30;

        $expiresAt = Carbon::now()->addDays($durationDays);

        $user->update([
            'is_active' => true,
            'subscription_expires_at' => $expiresAt
        ]);

        ExpireUserSubscriptionJob::dispatch($user->id)->delay($expiresAt);
    }
}
