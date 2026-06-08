<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Notifications\notifdeadline;

class TugasController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');

        // 1. Logika Pengalihan Langsung ke Tampilan Detail Tugas
        if ($keyword) {
            // Cari tugas milik user login yang judulnya sama persis
            $tugasAkurat = Tugas::where('user_id', Auth::id())
                ->where('judul', $keyword)
                ->first();

            // Jika ketemu yang pas, langsung arahkan ke rute detail (tugas.show)
            if ($tugasAkurat) {
                return redirect()->route('tugas.show', ['id' => $tugasAkurat->id]);
            }
        }

        // 2. Logika Filter Tabel Biasa (Jika keyword tidak pas/hanya sebagian kata)
        $semuaTugas = Tugas::where('user_id', Auth::id())
            ->when($keyword, function($query) use ($keyword) {
                $query->where(function($q) use ($keyword) {
                    $q->where('judul', 'LIKE', "%{$keyword}%")
                      ->orWhere('deskripsi', 'LIKE', "%{$keyword}%");
                });
            })
            ->latest()
            ->get();

        return view('daftar_tugas', compact('semuaTugas'));
    }

    public function show($id)
        {
        // Mengambil data tugas berdasarkan ID yang diklik/dicari
        $tugas = Tugas::where('user_id', Auth::id())->findOrFail($id);
        
        // CATATAN PENTING:
        // Jika nama file blade halaman biru (detail) Anda memiliki nama lain, 
        // ganti tulisan 'detail_tugas' di bawah ini dengan nama file tersebut.
        return view('detail_tugas', compact('tugas')); 
    }

    public function edit($id)
    {
        $tugas = Tugas::where('user_id', Auth::id())->findOrFail($id);

        return view('edit_tugas', compact('tugas'));
    }

    public function update(Request $request, $id)
    {
        $tugas = Tugas::where('user_id', Auth::id())->findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
            'prioritas' => 'required|in:High,Medium,Low',
            'status' => 'required|in:Belum Selesai,Sedang Berjalan,Selesai',
        ]);

        $tugas->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline,
            'prioritas' => $request->prioritas,
            'status' => $request->status,
        ]);

        if ($request->status === 'Selesai') {
            $notification = Auth::user()->unreadNotifications()->where('data->tugas_id', $tugas->id)->first();
            if ($notification) {
                $notification->markAsRead();
            }
        }

        return redirect()->route('daftar.tugas')->with('toast_success', 'Tugas berhasil disimpan.');
    }

    public function destroy($id)
    {
        $tugas = Tugas::where('user_id', Auth::id())->findOrFail($id);
        $tugas->delete();

        return redirect()->route('daftar.tugas')->with('toast_success', 'Tugas berhasil dihapus!');
    }
}