<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::where('role', 'user')->get();

        $totalUser = $users->count();

        $online = $users->filter(function ($user) {
            return $user->status == 'online';
            })->count();

        $idle = $users->filter(function ($user) {
            return $user->status == 'idle';
            })->count();

        $offline = $users->filter(function ($user) {
            return $user->status == 'offline';
            })->count();

        $aktifUser = $online;

        return view('admin.dashboard', compact(
            'totalUser',
            'aktifUser',
            'online',
            'idle',
            'offline',
            'users'
        ));
    }

    public function pengguna(Request $request)
    {
        $search = $request->search;
        $status = $request->status;

        $users = User::where('role', 'user')
            ->when($status, function ($query) use ($status) {
                $query->where('status', $status);
            })
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('username', 'like', "%{$search}%");
                });
            })
            ->get();

        $totalUser = User::where('role', 'user')->count();

        $aktifUser = User::where('role', 'user')
            ->where('status', 'online')->count();

        return view('admin.pengguna', compact(
            'users',
            'totalUser',
            'search',
            'status',
            'aktifUser'
        ));
    }
}
