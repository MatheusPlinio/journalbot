<?php

namespace App\Repositories\Eloquent;

use App\Models\Invoice;
use App\Models\PixPayment;
use App\Repositories\Contracts\InvoiceRepositoryInterface;

class InvoiceRepository implements InvoiceRepositoryInterface
{
    public function create(array $data): PixPayment
    {
        $pix = PixPayment::create([
            "transaction_id" => $data["transaction_id"],
            "qr_code" => $data["qr_code"],
            "qr_code_base64" => $data["qr_code_base64"],
            "status" => $data["status"],
            "payer_email" => $data["payer_email"],
            "response_payload" => $data["response_payload"],
        ]);

        $pix->invoice()->create([
            "user_id" => $data["user_id"],
            "amount" => $data["amount"],
            "status" => $data["status"],
            "description" => $data["description"],
        ]);

        return $pix;
    }

    public function findByExternalId(string $externalId): Invoice|null
    {
        return Invoice::where("external_id", $externalId)->first();
    }
}
