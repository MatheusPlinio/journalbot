<?php

namespace App\Repositories\Contracts;

use App\Models\Invoice;
use App\Models\PixPayment;

interface InvoiceRepositoryInterface
{
    public function create(array $data): PixPayment;
    public function findByExternalId(string $externalId): ?Invoice;
}