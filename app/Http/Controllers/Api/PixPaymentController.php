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
        protected InvoiceRepositoryInterface $invoiceRepository,
    ) {}

    public function create(PixPaymentStoreRequest $request): JsonResponse
    {
        $data = $request->validated();

        $plan = Plan::find($data["plan_id"]);

        try {
            $payment = $this->mercadoPagoService->createPixPayment(
                (float) $plan->price,
                config("services.pix.key"),
                $plan->description,
            );

            if (!$payment || isset($payment["error"])) {
                return response()->json(
                    [
                        "error" => true,
                        "message" =>
                            $payment["message"] ??
                            "Erro ao criar pagamento PIX",
                    ],
                    422,
                );
            }

            $invoice = $this->invoiceRepository->create([
                "user_id" => $request->user()->id,
                "transaction_id" => $payment["id"],
                "qr_code" => $payment["qr_code"],
                "qr_code_base64" => $payment["qr_code_base64"],
                "status" => $payment["status"],
                "payer_email" => $request->user()->email,
                "response_payload" => $payment,
                "amount" => $payment["amount"],
                "description" => $plan["description"],
            ]);

            if (!$invoice) {
                return response()->json(
                    [
                        "error" => true,
                        "message" => "Invoice Error Internal",
                    ],
                    500,
                );
            }

            return response()->json($invoice, 201);
        } catch (\Exception $e) {
            return response()->json(
                [
                    "error" => true,
                    "message" => $e->getMessage(),
                ],
                500,
            );
        }
    }
}
