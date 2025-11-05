<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PixPaymentStoreRequest;
use App\Models\Plan;
use App\Repositories\Contracts\InvoiceRepositoryInterface;
use App\Services\Contracts\MercadoPagoInterfaceService;
use Illuminate\Http\JsonResponse;

class PixPaymentController extends Controller
{
    public function __construct(
        protected MercadoPagoInterfaceService $mercadoPagoService,
        protected InvoiceRepositoryInterface $invoiceRepository)
    {
    }

    public function create(PixPaymentStoreRequest $request): JsonResponse
    {
        $data = $request->validated();

        $plan = Plan::find($data->plan_id);

        try {
            $payment = $this->mercadoPagoService->createPixPayment(
                (float) $plan->price,
                config('services.pix.key'),
                $plan->description
            );

            if (!$payment || isset($payment['error'])) {
                return response()->json([
                    'error' => true,
                    'message' => $payment['message'] ?? 'Erro ao criar pagamento PIX',
                ], 422);
            }

            $this->invoiceRepository->create($request->user(), [
                
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
