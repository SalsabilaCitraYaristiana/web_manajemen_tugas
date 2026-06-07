<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutentifikasiController extends Controller
{
    public function showRegister()
    {
        return view('autentifikasi.regis');
    }

    public function register(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'username' => 'required|string|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'username' => $request->username,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')->with('success', 'Registrasi berhasil! Silahkan login.');
    }

    public function showLogin()
    {
        return view('autentifikasi.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login_identity' => 'required|string',
            'password' => 'required|string',
        ]);

        $fieldType = filter_var($request->login_identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $loginData = [
            $fieldType => $request->login_identity,
            'password' => $request->password
        ];

        if (Auth::attempt($loginData)) {
            $request->session()->regenerate();
            session(['user_raw_password' => $request->password]);
            return redirect()->intended(route('dashboard'))->with('success', 'Selamat datang kembali!');
        }
        return back()->withErrors([
            'login_identity' => 'Email/Username atau password salah.',
        ])->onlyInput('login_identity');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
