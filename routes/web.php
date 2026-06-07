<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutentifikasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Tugas;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/fitur', function () {
    return view('fitur');
})->name('fitur');

Route::get('autentifikasi/login', [AutentifikasiController::class, 'showLogin'])->name('login');
Route::post('autentifikasi/login', [AutentifikasiController::class, 'login']);

Route::get('autentifikasi/regis', [AutentifikasiController::class, 'showRegister'])->name('register');
Route::post('autentifikasi/regis', [AutentifikasiController::class, 'register']);

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/daftar_tugas', function () {
    return view('daftar_tugas');
})->name('daftar.tugas')->middleware('auth');

Route::get('/tambah_tugas', function () {
    return view('tambah_tugas');
})->name('tugas.tambah')->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
})->name('profile.setting')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/daftar_tugas', [TugasController::class, 'index'])->name('daftar.tugas')->middleware('auth');
Route::post('/tambah_tugas', [TugasController::class, 'store'])->name('tugas.store')->middleware('auth');

// route edit delete tugas
Route::get('/tugas/{id}/edit', [TugasController::class, 'edit'])->name('tugas.edit')->middleware('auth');
Route::put('/tugas/{id}', [TugasController::class, 'update'])->name('tugas.update')->middleware('auth');
Route::delete('/tugas/{id}', [TugasController::class, 'destroy'])->name('tugas.destroy')->middleware('auth');

Route::get('/notif/read-all', function() {
    $userId = Auth::id();

    if ($userId) {

        \Illuminate\Support\Facades\DB::table('notifications')
            ->where('notifiable_id', $userId)
            ->where('notifiable_type', User::class)
            ->whereNull('read_at')
            ->update(['read_at' => now()]);
    }

    return redirect()->back();
})->name('notif.readall')->middleware('auth');

Route::get('/api/search-tugas', function(Request $request) {
    $keyword = $request->query('search');

    // Jika kolom search kosong, kembalikan array kosong
    if (empty($keyword)) {
        return response()->json([]);
    }

    // Mengambil data tugas milik user yang sedang login berdasarkan kata kunci
    $tugas = Tugas::where('user_id', Auth::id())
        ->where(function($q) use ($keyword) {
            $q->where('judul', 'LIKE', "%{$keyword}%")
              ->orWhere('deskripsi', 'LIKE', "%{$keyword}%");
        })
        ->take(5) // Membatasi maksimal 5 hasil agar kotak popover tidak terlalu panjang
        ->get(['id', 'judul', 'deskripsi', 'deadline']);

    // Mengubah format tanggal deadline menjadi d/m/Y sebelum dikirim ke JavaScript
    $tugas->transform(function($item) {
        $item->formatted_deadline = $item->deadline ? \Carbon\Carbon::parse($item->deadline)->format('d/m/Y') : '-';
        return $item;
    });

    // Mengembalikan data dalam bentuk JSON
    return response()->json($tugas);
})->middleware('auth')->name('api.search');

Route::post('/logout', [AutentifikasiController::class, 'logout'])->name('logout');
