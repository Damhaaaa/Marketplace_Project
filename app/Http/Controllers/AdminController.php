<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminController()
    {
        // Logika untuk halaman dashboard admin
        return view('admin.list');
    }

    // Tambahkan metode lain sesuai kebutuhan
}
