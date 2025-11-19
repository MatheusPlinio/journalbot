<?php 

namespace App\Services\Contracts;

interface MercadoPagoInterfaceService
{
    public function createPixPayment(float $amount, string $email, string $description): array;
}