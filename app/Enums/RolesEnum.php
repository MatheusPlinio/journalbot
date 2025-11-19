<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum RolesEnum: string implements HasLabel
{
    case ADMIN = 'admin';
    case CLIENT = 'client';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::CLIENT => 'Client'
        };
    }
}