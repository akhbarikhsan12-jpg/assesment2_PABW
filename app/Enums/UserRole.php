<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case pemohon = 'pemohon';

    public function label(): string
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::pemohon => 'Pengguna',
        };
    }
}
