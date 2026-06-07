@extends('layouts.dash_layout')

@section('dashboard-content')
<div class="space-y-6 max-w-4xl mx-auto">
    
    <div>
        <h1 class="text-3xl font-[Nexa_Heavy] text-[#0B2D48] tracking-tight">Tambah Tugas</h1>
        <p class="text-xs text-black font-[Nexa_Light] mt-1">Buat agenda tugas baru untuk mempermudah manajemen waktumu.</p>
    </div>

    <form action="{{ route('tugas.store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="bg-[#DEEAFB] p-6 rounded-2xl border border-[#142A74] shadow-sm space-y-4">
            
            <div class="space-y-1.5">
                <label class="text-xs font-[Nexa_Heavy] text-[#142A74]">Judul Tugas</label>
                <input type="text" name="judul" placeholder="Masukkan judul tugas..." required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl font-semibold text-xs text-[#0B2D48] placeholder-gray-400 bg-white focus:outline-none focus:border-[#0B2D48] focus:ring-1 focus:ring-[#0B2D48] transition-all">
            </div>

            <div class="space-y-1.5">
                <label class="text-xs font-[Nexa_Heavy] text-[#142A74]">Deskripsi</label>
                <textarea name="deskripsi" rows="4" placeholder="Deskripsi tugas..." required
                          class="w-full px-4 py-3 border border-gray-300 rounded-xl font-semibold text-xs text-[#0B2D48] placeholder-gray-400 bg-white focus:outline-none focus:border-[#0B2D48] focus:ring-1 focus:ring-[#0B2D48] transition-all resize-none"></textarea>
            </div>

        </div>

        <div class="bg-[#DEEAFB] p-6 rounded-2xl border border-[#142A74] shadow-sm">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <div class="space-y-1.5">
                    <label class="text-xs font-[Nexa_Heavy] text-[#142A74]">Deadline</label>
                    <input type="date" name="deadline" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl font-semibold text-xs text-[#0B2D48] placeholder-gray-400 bg-white focus:outline-none focus:border-[#0B2D48] transition-all">
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-[Nexa_Heavy] text-[#142A74]">Prioritas</label>
                    <select name="prioritas" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl font-semibold text-xs text-[#0B2D48] bg-white focus:outline-none focus:border-[#0B2D48] transition-all">
                        <option value="High">High</option>
                        <option value="Medium">Medium</option>
                        <option value="Low">Low</option>
                    </select>
                </div>

                <div class="space-y-1.5 md:col-span-2">
                    <label class="text-xs font-[Nexa_Heavy] text-[#142A74]">Status</label>
                    <select name="status" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl font-semibold text-xs text-[#0B2D48] bg-white focus:outline-none focus:border-[#0B2D48] transition-all">
                        <option value="Belum Selesai">Belum Selesai</option>
                        <option value="Sedang Berjalan">Sedang Berjalan</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="flex flex-col sm:flex-row items-center gap-4 pt-2">
            <button type="submit" class="w-full sm:w-1/2 py-3.5 bg-[#DEEAFB] hover:bg-[#152B52] hover:text-white text-[#142A74] font-bold text-sm rounded-xl transition-all shadow-sm cursor-pointer">
                Simpan Tugas
            </button>
            <a href="{{ route('dashboard') }}" class="w-full sm:w-1/2 py-3.5 bg-white hover:bg-[#F8BF12] border border-[#142A74] text-[#0B2D48] font-bold text-sm rounded-xl text-center transition-all shadow-sm">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection