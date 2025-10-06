<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        try {
            $service = new AuthService();

            return $service->login($request->email, $request->password, $request?->remember ?? false);
        } catch (\Throwable $th) {
            return back()->withErrors([
                'login' => $th->getMessage()
            ]);
        }
    }

    public function register()
    {
        return view('auth.register');
    }
    public function registerProcess(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        try {
            $service = new AuthService();
            return $service->register($data);
        } catch (\Throwable $th) {
            return back()->withErrors([
                'register' => $th->getMessage()
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Hapus sesi login pengguna

        // Invalidasi session & regenerate CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        flash('Logout Success');
        // Redirect ke halaman login (atau halaman lain sesuai kebutuhan)
        return redirect('/')->with('logout', 'You have been logged out.');
    }
}
