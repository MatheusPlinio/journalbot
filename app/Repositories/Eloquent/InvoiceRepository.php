<?php

namespace App\Repositories\Eloquent;

use App\Models\Invoice;
use App\Models\User;
use App\Repositories\Contracts\InvoiceRepositoryInterface;

class InvoiceRepository implements InvoiceRepositoryInterface
{
    public function create(User $user, array $data): Invoice
    {
        
    }

    public function findByExternalId(string $externalId): Invoice|null
    {
        return Invoice::where('external_id', $externalId)->first();
    }
}