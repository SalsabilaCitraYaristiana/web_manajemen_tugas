@extends('layouts.dash_layout')

@section('dashboard-content')
<div class="space-y-6 flex flex-col items-center w-full relative">
    <div class="w-full max-w-2xl">
        <a href="{{ route('daftar.tugas') }}" class="text-xs text-gray-400 hover:text-[#0B2D48] transition-all flex items-center gap-1 font-[Nexa_Light]">
            <i class="fa-solid fa-arrow-left text-[10px]"></i> Kembali ke List
        </a>
        <h1 class="text-3xl font-[Nexa_Heavy] text-[#0B2D48] tracking-tight mt-2">Edit Tugas</h1>
    </div>

    <div class="w-full max-w-2xl">
        <form action="{{ route('tugas.update', $tugas->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="bg-[#EBF2FC]/60 border border-[#BFD4F2]/50 rounded-[24px] p-6 space-y-4 shadow-sm w-full">
                <div>
                    <label class="block text-xs font-[Nexa_Heavy] text-[#0B2D48] mb-1.5 tracking-wide">Judul Tugas</label>
                    <input type="text" name="judul" value="{{ old('judul', $tugas->judul) }}"
                           class="w-full p-3 bg-white border border-[#BFD4F2] rounded-xl text-xs text-[#0B2D48] font-semibold focus:outline-none focus:border-[#1D3A6F] shadow-sm" required>
                </div>

                <div>
                    <label class="block text-xs font-[Nexa_Heavy] text-[#0B2D48] mb-1.5 tracking-wide">Deskripsi</label>
                    <textarea name="deskripsi" class="w-full p-3 bg-white border border-[#BFD4F2] rounded-xl text-xs text-[#0B2D48] font-medium focus:outline-none focus:border-[#1D3A6F] shadow-sm" rows="4" required>{{ old('deskripsi', $tugas->deskripsi) }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-[Nexa_Heavy] text-[#0B2D48] mb-1.5 tracking-wide">Deadline</label>
                        <input type="date" name="deadline" value="{{ old('deadline', $tugas->deadline) }}"
                               class="w-full p-3 bg-white border border-[#BFD4F2] rounded-xl text-xs text-[#0B2D48] font-semibold focus:outline-none focus:border-[#1D3A6F] shadow-sm" required>
                    </div>

                    <div>
                        <label class="block text-xs font-[Nexa_Heavy] text-[#0B2D48] mb-1.5 tracking-wide">Prioritas</label>
                        <select name="prioritas" class="w-full p-3 bg-white border border-[#BFD4F2] rounded-xl text-xs text-[#0B2D48] font-semibold focus:outline-none focus:border-[#1D3A6F] shadow-sm cursor-pointer" required>
                            <option value="High" {{ $tugas->prioritas == 'High' ? 'selected' : '' }}>High</option>
                            <option value="Medium" {{ $tugas->prioritas == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option value="Low" {{ $tugas->prioritas == 'Low' ? 'selected' : '' }}>Low</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-[Nexa_Heavy] text-[#0B2D48] mb-1.5 tracking-wide">Status</label>
                    <select name="status" class="w-full p-3 bg-white border border-[#BFD4F2] rounded-xl text-xs text-[#0B2D48] font-semibold focus:outline-none focus:border-[#1D3A6F] shadow-sm cursor-pointer" required>
                        <option value="Belum Selesai" {{ $tugas->status == 'Belum Selesai' ? 'selected' : '' }}>Belum Selesai</option>
                        <option value="Sedang Berjalan" {{ $tugas->status == 'Sedang Berjalan' ? 'selected' : '' }}>Sedang Berjalan</option>
                        <option value="Selesai" {{ $tugas->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2 w-full">
                <button type="submit" class="w-full py-3 bg-[#E2ECFA] hover:bg-[#D1E2FB] text-[#1D3A6F] font-[Nexa_Heavy] text-xs rounded-xl border border-[#BFD4F2] shadow-sm transition-all cursor-pointer text-center">
                    Simpan Perubahan
                </button>

                <button type="button" onclick="toggleCancelModal(true)" class="w-full py-3 bg-white hover:bg-gray-50 text-[#0B2D48] font-[Nexa_Heavy] text-xs rounded-xl border border-[#BFD4F2] shadow-sm transition-all cursor-pointer text-center flex items-center justify-center">
                    Batal
                </button>

                <button type="button" onclick="toggleDeleteModal(true)" class="w-full py-3 bg-white hover:bg-red-50 text-red-500 font-[Nexa_Heavy] text-xs rounded-xl border border-red-200 shadow-sm transition-all cursor-pointer text-center">
                    Hapus Tugas
                </button>
            </div>
        </form>
    </div>

    <form id="delete-form" action="{{ route('tugas.destroy', $tugas->id) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    <div id="cancelModal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
        <div class="absolute inset-0 bg-[#0B2D48]/30 backdrop-blur-sm"></div>
        <div class="bg-white rounded-[24px] p-8 max-w-sm w-full mx-4 shadow-xl relative z-10 flex flex-col items-center text-center space-y-5 border border-gray-100">
            <div class="w-16 h-16 bg-[#EBF2FC] text-[#1D3A6F] rounded-full flex items-center justify-center text-2xl font-[Nexa_Heavy]">?</div>
            <div class="space-y-1">
                <h3 class="text-base font-[Nexa_Heavy] text-[#0B2D48]">Batalkan perubahan tugas?</h3>
                <p class="text-[11px] text-gray-400 font-medium leading-relaxed">Perubahan yang belum disimpan tidak akan tersimpan.</p>
            </div>
            <div class="grid grid-cols-2 gap-3 w-full pt-2">
                <button type="button" onclick="toggleCancelModal(false)" class="py-2.5 bg-white border border-[#BFD4F2] text-[#0B2D48] font-[Nexa_Heavy] text-xs rounded-xl shadow-sm hover:bg-gray-50 transition-all cursor-pointer">Kembali</button>
                <button type="button" onclick="triggerSuccessCancel()" class="py-2.5 bg-[#1D3A6F] text-white font-[Nexa_Heavy] text-xs rounded-xl shadow-sm hover:bg-[#0B2D48] transition-all text-center flex items-center justify-center cursor-pointer">Ya, batalkan</button>
            </div>
        </div>
    </div>

    <div id="successCancelModal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
        <div class="absolute inset-0 bg-[#0B2D48]/30 backdrop-blur-sm"></div>
        <div class="bg-white rounded-[24px] p-8 max-w-sm w-full mx-4 shadow-xl relative z-10 flex flex-col items-center text-center space-y-5 border border-gray-100">
            <div class="w-16 h-16 bg-[#E8FAF0] text-[#10B981] rounded-full flex items-center justify-center text-3xl shadow-inner"><i class="fa-solid fa-check"></i></div>
            <div class="space-y-1">
                <h3 class="text-base font-[Nexa_Heavy] text-[#0B2D48]">Tugas berhasil dibatalkan!</h3>
                <p class="text-[11px] text-gray-400 font-medium leading-relaxed">Tugas telah berhasil dibatalkan.</p>
            </div>
            <div class="w-full pt-2">
                <a href="{{ route('daftar.tugas') }}" class="w-full block py-2.5 bg-[#1D3A6F] hover:bg-[#0B2D48] text-white font-[Nexa_Heavy] text-xs rounded-xl shadow-sm transition-all text-center cursor-pointer">OK</a>
            </div>
        </div>
    </div>

    <div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
        <div class="absolute inset-0 bg-[#0B2D48]/30 backdrop-blur-sm"></div>
        <div class="bg-white rounded-[24px] p-8 max-w-sm w-full mx-4 shadow-xl relative z-10 flex flex-col items-center text-center space-y-5 border border-gray-100">
            <div class="w-16 h-16 bg-red-50 text-red-500 rounded-full flex items-center justify-center text-2xl shadow-inner"><i class="fa-regular fa-trash-can"></i></div>
            <div class="space-y-1">
                <h3 class="text-base font-[Nexa_Heavy] text-[#0B2D48]">Hapus Tugas?</h3>
                <p class="text-[11px] text-gray-400 font-medium leading-relaxed">Tugas yang dihapus tidak dapat dikembalikan.</p>
            </div>
            <div class="grid grid-cols-2 gap-3 w-full pt-2">
                <button type="button" onclick="toggleDeleteModal(false)" class="py-2.5 bg-white border border-[#BFD4F2] text-[#0B2D48] font-[Nexa_Heavy] text-xs rounded-xl shadow-sm hover:bg-gray-50 transition-all cursor-pointer">Batal</button>
                <button type="button" onclick="submitDeleteForm()" class="py-2.5 bg-red-600 hover:bg-red-700 text-white font-[Nexa_Heavy] text-xs rounded-xl shadow-sm transition-all text-center flex items-center justify-center gap-2 cursor-pointer"><i class="fa-regular fa-trash-can text-sm"></i> Hapus</button>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleCancelModal(show) {
        const modal = document.getElementById('cancelModal');
        if (show) modal.classList.remove('hidden');
        else modal.classList.add('hidden');
    }

    function triggerSuccessCancel() {
        document.getElementById('cancelModal').classList.add('hidden');
        document.getElementById('successCancelModal').classList.remove('hidden');
    }

    function toggleDeleteModal(show) {
        const modal = document.getElementById('deleteModal');
        if (show) modal.classList.remove('hidden');
        else modal.classList.add('hidden');
    }

    function submitDeleteForm() {
        document.getElementById('delete-form').submit();
    }
</script>
@endsection
