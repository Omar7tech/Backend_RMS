<?php

namespace App\Enums;

enum UserRole: int
{
    case ADMIN = 1;
    case CLIENT = 2;
    case GUEST = 3;
    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::CLIENT => 'Client',
            self::GUEST => 'Guest',
        };
    }

    public function isAdmin(): bool
    {
        return $this === self::ADMIN;
    }
}