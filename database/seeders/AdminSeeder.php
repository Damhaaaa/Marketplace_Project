<?php

namespace Database\Seeders;

// database/seeders/AdminSeeder.php

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Buat admin baru
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Ganti dengan password yang diinginkan
            'role' => 'admin',
        ]);
    }
}

