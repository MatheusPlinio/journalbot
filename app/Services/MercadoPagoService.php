<?php

namespace App\Services;

use App\Services\Contracts\MercadoPagoInterfaceService;
use Exception;
use MercadoPago\Client\Common\RequestOptions;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\MercadoPagoConfig;
use Str;

class MercadoPagoService implements MercadoPagoInterfaceService
{
    public function __construct()
    {
        MercadoPagoConfig::setAccessToken(config('services.mercadopago.token'));
    }

    public function createPixPayment(float $amount, string $email, string $description): array
    {
        try {
            $client = new PaymentClient();

            $options = new RequestOptions();
            $options->setCustomHeaders([
                'X-Idempotency-Key: ' . Str::uuid(),
            ]);

            $payment = $client->create([
                'transaction_amount' => $amount,
                'description' => $description,
                'payment_method_id' => 'pix',
                'payer' => [
                    'email' => $email,
                ]
            ], $options);

            return [
                'id' => $payment->id,
                'status' => $payment->status,
                'qr_code' => $payment->point_of_interaction->transaction_data->qr_code,
                'qr_code_base64' => $payment->point_of_interaction->transaction_data->qr_code_base64,
                'ticket_url' => $payment->point_of_interaction->transaction_data->ticket_url,
                'amount' => $payment->transaction_amount,
            ];
        } catch (Exception $e) {
            return [
                'error' => true,
                'message' => $e->getMessage(),
            ];
        }
    }

    public function getPayment(string $id): array
    {
        try {
            $client = new PaymentClient();
            $payment = $client->get($id);

            return [
                'id' => $payment->id,
                'status' => $payment->status,
                'amount' => $payment->transaction_amount,
            ];
        } catch (Exception $e) {
            return [
                'error' => true,
                'message' => $e->getMessage(),
            ];
        }
    }
}