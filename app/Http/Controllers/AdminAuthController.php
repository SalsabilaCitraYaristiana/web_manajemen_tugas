<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials))
        {
            if(Auth::user()->role != 'admin')
            {
                Auth::logout();
                return back()->with(
                    'error',
                    'Anda bukan Admin, silahkan login dengan akun yang memiliki peran Admin.'
                );
            }
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        return back()->with(
            'error',
            'Email atau password salah.'
        );
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
