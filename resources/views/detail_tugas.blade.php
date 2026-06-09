@extends('layouts.dash_layout')

@section('dashboard-content')

<div class="max-w-4xl mx-auto space-y-6">

    <a href="{{ route('dashboard') }}"
       class="flex items-center gap-2 text-xs font-[Nexa_Light] text-gray-400 hover:text-[#0B2D48] transition-all">
        <i class="fa-solid fa-arrow-left text-[10px]"></i>
        Kembali ke dashboard
    </a>

    <div class="flex items-center gap-3">
        <h1 class="font-[Nexa_Heavy] text-2xl text-[#0B2D48]">
            {{ $tugas->judul }}
        </h1>

        <span class="px-3 py-1 rounded-full text-[10px] font-[Nexa_Heavy]
            @if($tugas->status == 'Selesai')
                bg-green-100 text-green-600
            @elseif($tugas->status == 'Sedang Berjalan')
                bg-yellow-100 text-yellow-600
            @else
                bg-gray-200 text-gray-500
            @endif">
            {{ $tugas->status }}
        </span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div class="bg-white p-4 rounded-2xl border shadow-sm flex items-center gap-3">

            <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-[#142A74]">
                <i class="fa-regular fa-calendar text-sm"></i>
            </div>

            <div>
                <p class="text-[10px] text-gray-400 font-[Nexa_Light]">Deadline</p>
                <p class="font-[Nexa_Heavy] text-sm text-[#0B2D48]">
                    {{ \Carbon\Carbon::parse($tugas->deadline)->format('d F Y') }}
                </p>
            </div>

        </div>

        <div class="bg-white p-4 rounded-2xl border shadow-sm flex items-center gap-3">

            <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center text-[#F8BF12]">
                <i class="fa-solid fa-flag text-sm"></i>
            </div>

            <div>
                <p class="text-[10px] text-gray-400 font-[Nexa_Light]">Prioritas</p>
                <p class="font-[Nexa_Heavy] text-sm text-[#0B2D48]">
                    {{ $tugas->prioritas }}
                </p>
            </div>

        </div>

    </div>

    <div class="bg-white p-6 rounded-2xl border shadow-sm space-y-4">

        <h3 class="font-[Nexa_Heavy] text-sm text-[#0B2D48]">
            Deskripsi
        </h3>

        <div class="bg-[#F5F7FB] p-4 rounded-xl text-xs font-[Nexa_Light] text-gray-600 leading-relaxed">
            {{ $tugas->deskripsi }}
        </div>

        <div class="flex items-center justify-between">
            <p class="text-xs font-[Nexa_Heavy] text-[#0B2D48]">
                Progress
            </p>

            <p class="text-xs font-[Nexa_Heavy] text-[#142A74]">
                {{ $tugas->status == 'Sedang Berjalan' ? '50' : '0' }}%
            </p>
        </div>

        <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
            <div class="bg-[#142A74] h-2 rounded-full transition-all duration-500"
                 style="width:{{ $tugas->status == 'Sedang Berjalan' ? '50' : '0' }}%">
            </div>
        </div>

    </div>

</div>

@endsection
