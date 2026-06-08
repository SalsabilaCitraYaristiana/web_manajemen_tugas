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
                    <p class="text-white text-6xl mt-3 font-[Nexa_Heavy]">{{ $online }}</p>
                </div>
                <div class="w-20 h-20 rounded-full bg-white/20 flex items-center justify-center">
                    <i class="fa-solid fa-user-check text-white text-4xl"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

    <div class="bg-white rounded-3xl border-2 border-[#E7C54C] p-6 shadow-sm">
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-[#0B2D48] text-lg font-[Nexa_Heavy]">
                Pengguna aktif saat ini
            </h2>
            <span class="text-xs text-gray-400">
                {{ $online }} Online
            </span>
        </div>

        <div class="space-y-4">
            @foreach($users->take(6) as $user)
            <div class="flex items-center justify-between border-b pb-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-[#E7C54C] flex items-center justify-center">
                        <i class="fa-solid fa-user text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-[#0B2D48]">
                            {{ $user->name }}
                        </p>

                        <p class="text-[11px] text-gray-400">
                            {{ $user->email }}
                        </p>
                    </div>
                </div>

               @if($user->status == 'online') 
                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-600 text-[10px]">
                        Online
                    </span>
                @elseif($user->status == 'idle')
                    <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-600 text-[10px]">
                        Idle
                    </span>
                @else
                    <span class="px-3 py-1 rounded-full bg-gray-200 text-gray-600 text-[10px]">
                        Offline
                    </span>
                @endif
            </div>
            @endforeach
        </div>
    </div>

    <div class="bg-white rounded-3xl border-2 border-[#E7C54C] p-6 shadow-sm">
        <h2 class="text-[#0B2D48] text-lg font-[Nexa_Heavy] mb-5">
            Aktif tahunan
        </h2>

        <div class="space-y-4">
            @foreach($users->take(6) as $user)
            <div class="flex items-center gap-3 border-b pb-3">
                <div class="w-9 h-9 rounded-full bg-[#D9D9D9] flex items-center justify-center text-[#7A7A7A] text-xs font-bold">
                    {{ strtoupper(substr($user->name,0,1)) }}
                </div>

                <div>
                    <p class="text-sm font-semibold text-[#0B2D48]">
                        {{ $user->name }}
                    </p>
                    <p class="text-[11px] text-gray-400">
                        {{ $user->email }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection