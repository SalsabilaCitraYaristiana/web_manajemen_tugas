<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUser = User::where('role', 'user')->count();

        $online = User::where('role', 'user')->where('status', 'online')->count();

        $idle = User::where('role', 'user')->where('status', 'idle')->count();

        $offline = User::where('role', 'user')->where('status', 'offline')->count();

        $users = User::where('role', 'user')->latest()->take(6)->get();

        $aktifTahunan = User::where('role', 'user')->count();

        $aktifUser = $online;

        return view('admin.dashboard', compact(
            'totalUser',
            'online',
            'idle',
            'offline',
            'users',
            'aktifTahunan',
            'aktifUser'
        ));
    }

    public function pengguna(Request $request)
    {
        $search = $request->search;
        $status = $request->status;

        $users = User::where('role', 'user')->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('username', 'like', "%{$search}%");
            })
            ->get();

        $totalUser = User::where('role', 'user')->count();

        $aktifUser = User::where('role', 'user')
            ->where('status', 'online')->count();

        return view('admin.pengguna', compact(
            'users',
            'totalUser',
            'search',
            'aktifUser'
        ));
    }
}
