<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $data = $request->all();

        Log::info('Mercado Pago Webhook', $data);

        if (!isset($data['type']) || $data['type'] !== 'payment') {
            return response()->json(['status' => 'ignored'], 200);
        }

        if (!isset($data['data']['id'])) {
            return response()->json(['status' => 'error', 'message' => 'Payment ID not found'], 400);
        }

        $paymentId = $data['data']['id'];
        $paymentInfo = $this->mercadoPagoService->getPayment($paymentId);

        if (isset($paymentInfo['error'])) {
            Log::error('Error fetching payment info', $paymentInfo);
            return response()->json(['status' => 'error', 'message' => 'Could not fetch payment info'], 500);
        }

        if ($paymentInfo['status'] === 'approved') {
            $pixPayment = PixPayment::where('transaction_id', $paymentId)->first();

            if ($pixPayment) {
                $pixPayment->update(['status' => 'approved']);

                $invoice = $pixPayment->invoice;
                if ($invoice) {
                    $invoice->update(['status' => 'paid']);

                    $user = $invoice->user;
                    if ($user) {
                        $user->update([
                            'is_active' => true,
                            'subscription_expires_at' => Carbon::now()->addMonth()
                        ]);
                    }
                }
            }
        }

        return response()->json(['status' => 'success'], 200);
    }
}
