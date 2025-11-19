<?php

namespace App\Repositories\Contracts;

use App\Models\User;

interface UserRepositoryInterface
{
    /**
     * Summary of 
     * @param array {
     *   name: string,
     *   email: string,
     *   password: string,
     *   phone: string
     *   }
     * } $data
     */
    public function store(array $data): bool|User;
}