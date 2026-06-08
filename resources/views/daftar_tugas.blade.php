@extends('layouts.dash_layout')

@section('dashboard-content')
<div class="space-y-6">

    <div>
        <h1 class="text-3xl font-[Nexa_Heavy] text-[#0B2D48] tracking-tight">Daftar Tugas</h1>
        <p class="text-xs text-black font-[Nexa_Light] mt-1">Kelola dan kerjakan tugas anda.....</p>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-2xl text-xs font-semibold" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white rounded-3xl shadow-sm border border-gray-200 overflow-hidden p-6">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-gray-300 font-[Nexa_Heavy] text-[#0B2D48] font-bold text-sm">
                        <th class="pb-4 pt-2 text-center w-1/12">No</th>
                        <th class="pb-4 pt-2 w-4/12">Nama Tugas</th>
                        <th class="pb-4 pt-2 text-center w-2/12">Deadline</th>
                        <th class="pb-4 pt-2 text-center w-3/12">Status Tugas</th>
                        <th class="pb-4 pt-2 text-center w-2/12">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-xs font-semibold text-[#0B2D48]/80">

                    @forelse($semuaTugas as $index => $tugas)
                        <tr class="hover:bg-gray-50/50 transition-all">
                            <td class="py-4 text-center font-bold">{{ $index + 1 }}</td>

                            {{-- ✅ Judul tugas sekarang bisa diklik → ke halaman detail --}}
                            <td class="py-4">
                                <a href="{{ route('tugas.show', $tugas->id) }}" class="block hover:opacity-75 transition-opacity">
                                    <div class="font-[Nexa_Heavy] text-[#0B2D48] text-sm hover:underline">{{ $tugas->judul }}</div>
                                    <div class="text-[10px] text-gray-400 font-[Nexa_Light] mt-0.5 max-w-md truncate">{{ $tugas->deskripsi }}</div>
                                </a>
                            </td>

                            <td class="py-4 text-center text-gray-400 font-medium">
                                {{ \Carbon\Carbon::parse($tugas->deadline)->format('d/m/Y') }}
                            </td>

                            <td class="py-4 text-center">
                                @if($tugas->status == 'Selesai')
                                    <span class="inline-block px-6 py-1.5 bg-[#22C55E] text-white text-[10px] font-bold rounded-full w-36 shadow-sm">Selesai</span>
                                @elseif($tugas->status == 'Sedang Berjalan')
                                    <span class="inline-block px-6 py-1.5 bg-[#EAB308] text-white text-[10px] font-bold rounded-full w-36 shadow-sm">Sedang Berjalan</span>
                                @else
                                    <span class="inline-block px-6 py-1.5 bg-[#EF4444] text-white text-[10px] font-bold rounded-full w-36 shadow-sm">Belum Selesai</span>
                                @endif
                            </td>

                            <td class="py-4 text-center">
                                <div class="flex items-center justify-center gap-1.5">

                                    <button type="button"
                                            onclick="bukaModalHapus('{{ route('tugas.destroy', $tugas->id) }}')"
                                            class="w-7 h-7 bg-[#1D3A6F] text-white rounded flex items-center justify-center hover:bg-[#152B52] transition-all cursor-pointer">
                                        <i class="fa-solid fa-trash-can text-[11px]"></i>
                                    </button>

                                    {{-- Tombol edit tetap ke halaman edit --}}
                                    <a href="{{ route('tugas.edit', $tugas->id) }}"
                                       class="w-7 h-7 bg-[#F4C01E] text-[#0B2D48] rounded flex items-center justify-center hover:bg-[#dca910] transition-all cursor-pointer">
                                        <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                                    </a>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-12 text-center text-gray-400 font-[Nexa_Light]">
                                @if(request('search'))
                                    Tugas dengan kata kunci "{{ request('search') }}" tidak ditemukan. 🔍
                                @else
                                    Belum ada daftar tugas. Yuk, klik tombol tambah tugas di bawah! ✨
                                @endif
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="flex items-center gap-6 mt-6 pt-4 border-t border-gray-100 text-[11px] font-[Nexa_Light] text-black">
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-[#22C55E]"></span> <span>Selesai</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-[#EAB308]"></span> <span>Sedang Berjalan</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-[#EF4444]"></span> <span>Belum Selesai</span>
            </div>
        </div>
    </div>

    <a href="{{ route('tugas.tambah') }}" class="w-full py-5 bg-[#E2ECFA] hover:bg-[#D1E2FB] border border-dashed border-[#1D3A6F]/30 rounded-2xl flex flex-col items-center justify-center gap-1 text-[#0B2D48] transition-all group">
        <div class="w-8 h-8 bg-[#1D3A6F] text-white rounded-full flex items-center justify-center group-hover:scale-105 transition-transform">
            <i class="fa-solid fa-plus text-sm"></i>
        </div>
        <span class="text-xs font-[Nexa_Heavy] mt-1">Tambah Tugas</span>
    </a>

</div>

<div id="modalHapus" class="fixed inset-0 bg-gray-900/40 backdrop-blur-sm z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
    <div class="bg-white rounded-3xl p-8 max-w-sm w-full mx-4 shadow-xl transform scale-95 transition-transform duration-300 flex flex-col items-center text-center">
        <div class="w-16 h-16 bg-red-50 text-[#EF4444] rounded-full flex items-center justify-center mb-4 shadow-inner">
            <i class="fa-solid fa-trash-can text-2xl"></i>
        </div>
        <h3 class="text-lg font-bold text-[#0B2D48] mb-1">Hapus Tugas?</h3>
        <p class="text-xs text-gray-400 font-medium mb-6">Tugas yang dihapus tidak dapat dikembalikan.</p>
        <div class="flex items-center gap-3 w-full">
            <button type="button" onclick="tutupModalHapus()" class="flex-1 py-3 border border-gray-200 text-[#0B2D48] font-bold text-xs rounded-xl hover:bg-gray-50 transition-all cursor-pointer">Batal</button>
            <form id="formHapusTugas" action="" method="POST" class="flex-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full py-3 bg-[#EF4444] text-white font-bold text-xs rounded-xl hover:bg-red-600 shadow-sm shadow-red-200 transition-all flex items-center justify-center gap-1.5 cursor-pointer">
                    <i class="fa-solid fa-trash-can text-[10px]"></i> Hapus
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    function bukaModalHapus(urlAction) {
        const modal = document.getElementById('modalHapus');
        document.getElementById('formHapusTugas').setAttribute('action', urlAction);
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modal.querySelector('div').classList.remove('scale-95');
        }, 10);
    }

    function tutupModalHapus() {
        const modal = document.getElementById('modalHapus');
        modal.classList.add('opacity-0');
        modal.querySelector('div').classList.add('scale-95');
        setTimeout(() => modal.classList.add('hidden'), 300);
    }
</script>
@endsection
