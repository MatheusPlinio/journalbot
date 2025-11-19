<?php

namespace App\Repositories\Eloquent;

use App\Enums\RolesEnum;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function store(array $data): bool|User
    {
        return User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => $data["password"],
            "phone" => $data["phone"]
        ])->assignRole(RolesEnum::CLIENT->value);
    }
}