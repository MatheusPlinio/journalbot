<?php

namespace App\Repositories\Contracts;

use App\Models\Invoice;
use App\Models\User;

interface InvoiceRepositoryInterface
{
    public function create(User $user, array $data): Invoice;
    public function findByExternalId(string $externalId): ?Invoice;
}