<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    // Definisi properti dan metode model

    // Implementasi metode untuk autentikasi
    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return null; // Tidak ada fitur remember token untuk admin
    }

    public function setRememberToken($value)
    {
        // Tidak ada fitur remember token untuk admin
    }

    public function getRememberTokenName()
    {
        return ''; // Tidak ada fitur remember token untuk admin
    }
}
