@extends('layouts.dash_layout')

@section('dashboard-content')
<div class="space-y-8">
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="{{ route('profile.setting') }}" class="bg-white p-5 rounded-2xl shadow-sm border-l-4 border-[#142A74] flex items-center justify-between hover:shadow-md hover:-translate-y-0.5 transition-all group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-500 group-hover:bg-blue-500 group-hover:text-white transition-all">
                    <i class="fa-regular fa-user text-xl"></i>
                </div>
                <div>
                    <h3 class="font-[Nexa_Heavy] text-[#0B2D48] text-sm">Profile</h3>
                    <p class="font-[Nexa_Light] text-[11px] text-gray-400">Lihat detail akun & instansi</p>
                </div>
            </div>
            <i class="fa-solid fa-chevron-right text-gray-300 text-xs group-hover:text-blue-500 transition-all"></i>
        </a>

        <a href="{{ route('daftar.tugas') }}" class="bg-white p-5 rounded-2xl shadow-sm border-l-4 border-[#F8BF12] flex items-center justify-between hover:shadow-md hover:-translate-y-0.5 transition-all group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-amber-500 group-hover:bg-amber-500 group-hover:text-white transition-all">
                    <i class="fa-regular fa-file-lines text-xl"></i>
                </div>
                <div>
                    <h3 class="font-[Nexa_Heavy] text-[#0B2D48] text-sm">Daftar Tugas</h3>
                    <p class="font-[Nexa_Light] text-[11px] text-gray-400">Lihat seluruh list tugas aktif</p>
                </div>
            </div>
            <i class="fa-solid fa-chevron-right text-gray-300 text-xs group-hover:text-amber-500 transition-all"></i>
        </a>

        <a href="{{ route('tugas.tambah') }}" class="bg-white p-5 rounded-2xl shadow-sm border-l-4 border-[#417B4E] flex items-center justify-between hover:shadow-md hover:-translate-y-0.5 transition-all group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center text-green-500 group-hover:bg-green-500 group-hover:text-white transition-all">
                    <i class="fa-solid fa-plus text-xl"></i>
                </div>
                <div>
                    <h3 class="font-[Nexa_Heavy] text-[#0B2D48] text-sm">Tambah Tugas</h3>
                    <p class="font-[Nexa_Light] text-[11px] text-gray-400">Buat catatan agenda baru</p>
                </div>
            </div>
            <i class="fa-solid fa-chevron-right text-gray-300 text-xs group-hover:text-green-500 transition-all"></i>
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 items-start">
        
        <div class="lg:col-span-2 space-y-4">
            @forelse($tugasAktif as $tugas)
                <div class="bg-[#E2ECFA]/60 p-6 rounded-2xl border border-blue-200/40 shadow-sm flex items-center justify-between gap-4 hover:shadow-md transition-all">
                    <div class="space-y-2 min-w-0">
                        <h3 class="font-[Nexa_Heavy] text-xl text-[#0B2D48] truncate">{{ $tugas->judul }}</h3>
                        <p class="font-[Nexa_Light] text-[11px] text-gray-400 leading-relaxed truncate">{{ $tugas->deskripsi }}</p>
                        <a href="{{ route('tugas.show', $tugas->id) }}" class="inline-flex items-center gap-1 text-xs font-[Nexa_Heavy] text-[#142A74] hover:underline pt-2">
                            Lihat Detail <i class="fa-solid fa-chevron-right text-[10px]"></i>
                        </a>
                    </div>
                    
                    <div class="shrink-0 w-24 h-24 rounded-full flex items-center justify-center relative shadow-inner" 
                         style="background: conic-gradient(#F8BF12 0% {{ $tugas->status == 'Sedang Berjalan' ? '50%' : '0%' }}, #142A74 {{ $tugas->status == 'Sedang Berjalan' ? '50%' : '0%' }} 100%);">
                        <div class="w-18 h-18 bg-[#E2ECFA] rounded-full flex items-center justify-center shadow-sm">
                            <span class="font-[Nexa_Heavy] text-base text-[#0B2D48]">
                                {{ $tugas->status == 'Sedang Berjalan' ? '50%' : '0%' }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="bg-white p-6 rounded-2xl border border-dashed border-gray-200 text-center py-12">
                    <p class="font-[Nexa_Light] text-xs text-gray-400">Tidak ada tugas aktif yang sedang dikerjakan. 🙌</p>
                </div>
            @endforelse
        </div>

        <div class="lg:col-span-3 bg-[#E2ECFA]/40 p-6 rounded-2xl border border-[#1D3A6F]/10 shadow-sm space-y-4">
            <h3 class="font-[Nexa_Heavy] text-lg text-[#0B2D48] tracking-tight">Riwayat Tugas</h3>
            
            <div class="space-y-3 max-h-[340px] overflow-y-auto pr-1">
                @forelse($riwayatTugas as $riwayat)
                    <a href="{{ route('tugas.show', $riwayat->id) }}" class="bg-[#F8BF12] p-4 rounded-xl flex items-center justify-between gap-4 shadow-sm hover:shadow-md transition-all block">
                        <div class="min-w-0 text-[#0B2D48]">
                            <h4 class="font-[Nexa_Heavy] text-sm truncate">{{ $riwayat->judul }}</h4>
                            <p class="font-[Nexa_Light] text-[10px] opacity-80 truncate mt-0.5">{{ $riwayat->deskripsi }}</p>
                        </div>
                        <div class="shrink-0 w-6 h-6 rounded-full border-2 border-white flex items-center justify-center text-white text-xs">
                            <i class="fa-solid fa-check"></i>
                        </div>
                    </a>
                @empty
                    <div class="text-center py-16">
                        <p class="font-[Nexa_Light] text-xs text-gray-400">Belum ada riwayat tugas yang selesai.</p>
                    </div>
                @endforelse
            </div>
        </div>

    </div>
</div>
@endsection