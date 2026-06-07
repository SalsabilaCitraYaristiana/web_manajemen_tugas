@extends('layouts.admin')

@section('content')

<div class="space-y-8">

    <div class="grid grid-cols-2 gap-6">

        <div class="bg-[#E7C54C] rounded-3xl p-8 shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-white text-lg font-[Nexa_Heavy]">Total Pengguna</h3>
                    <p class="text-white text-6xl mt-3 font-[Nexa_Heavy]">{{ $totalUser }}</p>
                </div>

                <div class="w-20 h-20 rounded-full bg-white/20 flex items-center justify-center">
                    <i class="fa-solid fa-users text-white text-4xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-[#E7C54C] rounded-3xl p-8 shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-white text-lg font-[Nexa_Heavy]">Aktif Hari Ini</h3>
                    <p class="text-white text-6xl mt-3 font-[Nexa_Heavy]">{{ $aktifUser }}</p>
                </div>
                <div class="w-20 h-20 rounded-full bg-white/20 flex items-center justify-center">
                    <i class="fa-solid fa-user-check text-white text-4xl"></i>
                </div>
            </div>
        </div>
    </div>

<div class="bg-white rounded-2xl border border-[#D4B442] p-6">
    <div class="flex justify-between items-center mb-5">
        <div>
            <h2 class="text-[#0B2D48] text-xl font-[Nexa_Heavy]">Semua Pengguna</h2>
            <p class="text-xs text-[#7B88A8] mt-1">Total {{ $totalUser }} pengguna terdaftar</p>
        </div>

        <div class="text-xs text-[#7B88A8]">Tampil {{ $users->count() }} dari {{ $totalUser }}</div>
    </div>

    <div class="flex gap-2 mb-8">
        <button class="px-4 py-1 rounded-full border text-xs border-gray-400 hover:bg-[#D4B442] hover:text-white">
            Semua
        </button>
        <button class="px-4 py-1 rounded-full border text-xs border-gray-400 hover:bg-green-500 hover:text-white">
            Online
        </button>
        <button class="px-4 py-1 rounded-full border text-xs border-gray-400 hover:bg-yellow-500 hover:text-white">
            Idle
        </button>
        <button class="px-4 py-1 rounded-full border text-xs border-gray-400 hover:bg-gray-500 hover:text-white">
            Offline
        </button>
    </div>

    <table class="w-full">
        <thead>
            <tr class="border-b text-[#7B88A8] text-sm">
                <th class="text-left py-4">Nama</th>
                <th class="text-left py-4">Email</th>
                <th class="text-center py-4">Status</th>
                <th class="text-right py-4">Terakhir Login</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                        <tr class="border-b hover:bg-gray-50">

                <td class="py-4">

                    <div class="flex items-center gap-3">

                        <img
                            src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}"
                            class="w-10 h-10 rounded-full">
                        <div>
                            <p class="font-semibold text-[#0B2D48]">
                                {{ $user->name }}
                            </p>
                            <p class="text-xs text-gray-400">
                                {{ $user->id }}
                            </p>
                        </div>
                    </div>
                </td>

                <td class="text-gray-600 text-sm">
                    {{ $user->email }}
                </td>

                <td class="text-center">
                    @if($user->status === 'online')
                        <span class="bg-green-100 text-green-500 px-3 py-1 rounded-full text-xs">
                            Online
                        </span>
                    @elseif($user->status === 'idle')
                        <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs">
                            Idle
                        </span>
                    @else
                        <span class="bg-gray-200 text-gray-500 px-3 py-1 rounded-full text-xs">
                            Offline
                        </span>
                    @endif
                </td>
                <td class="text-right text-sm text-gray-400">
                    {{ $user->last_seen ? $user->last_seen->diffForHumans() : '-' }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
    
