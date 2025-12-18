<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessApprovedPaymentJob;
use App\Services\Contracts\MercadoPagoInterfaceService;
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
        Log::info("Webhook Mercado Pago recebido", [
            'payload' => $request->all(),
            'headers' => $request->headers->all(),
        ]);

        try {

            if (!$this->isValidSignature($request)) {
                Log::warning('Webhook Mercado Pago com assinatura inválida', [
                    'headers' => $request->headers->all()
                ]);

                return response()->json(['error' => 'Invalid signature'], 401);
            }

            $data = $request->all();

            if (($data['type'] ?? null) !== 'payment') {
                return response()->json(['status' => 'ignored'], 200);
            }

            $paymentId = $data['data']['id'] ?? null;
            if (!$paymentId) {
                Log::warning('Webhook sem payment ID', ['payload' => $data]);
                return response()->json(['status' => 'error', 'message' => 'Payment ID not found'], 400);
            }

            ProcessApprovedPaymentJob::dispatch($paymentId);

            return response()->json(['status' => 'success'], 200);

        } catch (\Throwable $e) {
            Log::error('Exceção no Webhook Mercado Pago', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'payload' => $request->all(),
            ]);

            return response()->json(['status' => 'error', 'message' => 'Internal processing error'], 200);
        }
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
}
