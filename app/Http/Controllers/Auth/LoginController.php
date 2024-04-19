<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Cek apakah email adalah admin@example.com dan password adalah admin123
            if ($request->email === 'admin@example.com' && $request->password === 'admin123') {
                // Email dan password cocok, arahkan ke halaman admin
                return redirect()->route('admin.list');
            } else {
                // Email atau password tidak cocok dengan kriteria admin, arahkan ke halaman user biasa
                return redirect()->route('login');
            }
        }

        // Kredensial tidak cocok, arahkan kembali ke halaman login dengan pesan kesalahan
        return redirect()->route('login')->with('error', 'These credentials do not match our records.');
    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    

    
}
