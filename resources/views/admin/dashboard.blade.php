@extends('layouts.admin')

@section('content')

<div class="space-y-6 md:space-y-8">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">

        <div class="bg-[#E7C54C] rounded-3xl p-6 sm:p-8 shadow-md">
            <div class="flex items-center justify-between gap-4">
                <div class="min-w-0">
                    <h3 class="text-white text-base sm:text-lg font-[Nexa_Heavy] truncate ">Total Pengguna</h3>
                    <p class="text-white text-4xl sm:text-5xl md:text-6xl mt-2 sm:mt-3 font-[Nexa_Heavy] break-words">{{ $totalUser }}</p>
                </div>

                <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-users text-white text-3xl sm:text-4xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-[#E7C54C] rounded-3xl p-6 sm:p-8 shadow-md">
            <div class="flex items-center justify-between gap-4">
                <div class="min-w-0">
                    <h3 class="text-white text-base sm:text-lg font-[Nexa_Heavy] truncate">Aktif Hari Ini</h3>
                    <p class="text-white text-4xl sm:text-5xl md:text-6xl mt-2 sm:mt-3 font-[Nexa_Heavy] break-words">{{ $online }}</p>
                </div>
                <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-user-check text-white text-3xl sm:text-4xl"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <div class="bg-white rounded-3xl border-2 border-[#E7C54C] p-5 sm:p-6 shadow-sm">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 mb-5">
                <h2 class="text-[#0B2D48] text-base sm:text-lg font-[Nexa_Heavy]">
                    Pengguna aktif saat ini
                </h2>
                <span class="text-xs text-gray-400 shrink-0 font-[Nexa_light]">
                    {{ $online }} Online
                </span>
            </div>

            <div class="space-y-4"> 
                
                @foreach($users->take(6) as $user) 
                <div class="flex items-center justify-between border-b pb-3 gap-2">
                    <div class="flex items-center gap-3 min-w-0">
                        <div class="w-10 h-10 rounded-full bg-[#E7C54C] flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-user text-white text-sm"></i>
                        </div>
                        <div class="min-w-0">
                            <p class="text-sm font-semibold text-[#0B2D48] truncate font-[Nexa_Heavy]">
                                {{ $user->name }}
                            </p>
                            <p class="text-[11px] text-gray-400 truncate font-[Nexa_Heavy]">
                                {{ $user->email }}
                            </p>
                        </div>
                    </div>

                    <div class="shrink-0">
                        @if($user->status == 'online')
                            <span class="px-2.5 py-1 rounded-full bg-green-100 text-green-600 text-[10px] font-medium block text-center font-[Nexa_light]">
                                Online
                            </span>
                        @elseif($user->status == 'idle')
                            <span class="px-2.5 py-1 rounded-full bg-yellow-100 text-yellow-600 text-[10px] font-medium block text-center font-[Nexa_light]">
                                Idle
                            </span>
                        @else
                            <span class="px-2.5 py-1 rounded-full bg-gray-200 text-gray-600 text-[10px] font-medium block text-center font-[Nexa_light]">
                                Offline
                            </span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="bg-white rounded-3xl border-2 border-[#E7C54C] p-5 sm:p-6 shadow-sm">
            <h2 class="text-[#0B2D48] text-base sm:text-lg font-[Nexa_Heavy] mb-5">
                Aktif tahunan
            </h2>

            <div class="space-y-4">
                @foreach($users->take(6) as $user)
                <div class="flex items-center gap-3 border-b pb-3 min-w-0">
                    <div class="w-9 h-9 rounded-full bg-[#D9D9D9] flex items-center justify-center text-[#7A7A7A] text-xs font-bold shrink-0 font-[Nexa_Heavy]">
                        {{ strtoupper(substr($user->name,0,1)) }}
                    </div>

                    <div class="min-w-0">
                        <p class="text-sm font-semibold text-[#0B2D48] truncate font-[Nexa_Heavy]">
                            {{ $user->name }}
                        </p>
                        <p class="text-[11px] text-gray-400 truncate font-[Nexa_light]">
                            {{ $user->email }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
