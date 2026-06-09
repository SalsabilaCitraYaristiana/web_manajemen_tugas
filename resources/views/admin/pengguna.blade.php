@extends('layouts.admin')

@section('content')

<div class="space-y-6 md:space-y-8">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">

        <div class="bg-[#E7C54C] rounded-3xl p-6 sm:p-8 shadow-md">
            <div class="flex items-center justify-between gap-4">
                <div class="min-w-0">
                    <h3 class="text-white text-base sm:text-lg font-[Nexa_Heavy] truncate">Total Pengguna</h3>
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
                    <p class="text-white text-4xl sm:text-5xl md:text-6xl mt-2 sm:mt-3 font-[Nexa_Heavy] break-words">{{ $aktifUser }}</p>
                </div>
                <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-user-check text-white text-3xl sm:text-4xl"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl border border-[#D4B442] p-4 sm:p-6 shadow-sm">

        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 mb-5">
            <div>
                <h2 class="text-[#0B2D48] text-lg sm:text-xl font-[Nexa_Heavy]">Semua Pengguna</h2>
                <p class="text-xs text-[#7B88A8] mt-1">Total {{ $totalUser }} pengguna terdaftar</p>
            </div>
            <div class="text-xs text-[#7B88A8] self-end sm:self-auto">
                Tampil {{ $users->count() }} dari {{ $totalUser }}
            </div>
        </div>

        <div class="flex gap-2 mb-6 overflow-x-auto pb-2 scrollbar-none -mx-4 px-4 sm:mx-0 sm:px-0">
            <a href="{{ route('admin.pengguna') }}" class="px-4 py-1.5 rounded-full border text-xs shrink-0 transition {{ !request('status') ? 'bg-[#D4B442] text-white border-[#D4B442]' : 'text-gray-600 bg-white hover:bg-gray-50' }}">
                Semua
            </a>

            <a href="{{ route('admin.pengguna', ['status' => 'online']) }}" class="px-4 py-1.5 rounded-full border text-xs shrink-0 transition {{ request('status')=='online' ? 'bg-green-500 text-white border-green-500' : 'text-gray-600 bg-white hover:bg-gray-50' }}">
                Online
            </a>

            <a href="{{ route('admin.pengguna', ['status' => 'idle']) }}" class="px-4 py-1.5 rounded-full border text-xs shrink-0 transition {{ request('status')=='idle' ? 'bg-yellow-500 text-white border-yellow-500' : 'text-gray-600 bg-white hover:bg-gray-50' }}">
                Idle
            </a>

            <a href="{{ route('admin.pengguna', ['status' => 'offline']) }}" class="px-4 py-1.5 rounded-full border text-xs shrink-0 transition {{ request('status')=='offline' ? 'bg-gray-500 text-white border-gray-500' : 'text-gray-600 bg-white hover:bg-gray-50' }}">
                Offline
            </a>
        </div>

        <div class="w-full overflow-x-auto rounded-xl border border-gray-100">
            <table class="w-full min-w-[600px] text-sm text-left">
                <thead>
                    <tr class="border-b bg-gray-50/50 text-[#7B88A8] text-xs uppercase tracking-wider">
                        <th class="py-4 px-4 font-semibold">Nama</th>
                        <th class="py-4 px-4 font-semibold">Email</th>
                        <th class="py-4 px-4 font-semibold text-center">Status</th>
                        <th class="py-4 px-4 font-semibold text-right">Terakhir Login</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($users as $user)
                    <tr class="hover:bg-gray-50/80 transition-colors">
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-3 min-w-0">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=E7C54C&color=fff"
                                     class="w-10 h-10 rounded-full shrink-0 shadow-sm" alt="Avatar">
                                <div class="min-w-0">
                                    <p class="font-semibold text-[#0B2D48] truncate">
                                        {{ $user->name }}
                                    </p>
                                    <p class="text-xs text-gray-400 font-mono truncate">
                                        ID: {{ $user->id }}
                                    </p>
                                </div>
                            </div>
                        </td>

                        <td class="py-4 px-4 text-gray-600">
                            <span class="block max-w-[200px] truncate">{{ $user->email }}</span>
                        </td>

                        <td class="py-4 px-4 text-center">
                            @if($user->status === 'online')
                                <span class="inline-flex items-center justify-center bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium min-w-[70px]">
                                    Online
                                </span>
                            @elseif($user->status === 'idle')
                                <span class="inline-flex items-center justify-center bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-medium min-w-[70px]">
                                    Idle
                                </span>
                            @else
                                <span class="inline-flex items-center justify-center bg-gray-100 text-gray-500 px-3 py-1 rounded-full text-xs font-medium min-w-[70px]">
                                    Offline
                                </span>
                            @endif
                        </td>

                        <td class="py-4 px-4 text-right text-gray-400 font-medium whitespace-nowrap">
                            {{ $user->last_seen ? $user->last_seen->diffForHumans() : '-' }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
