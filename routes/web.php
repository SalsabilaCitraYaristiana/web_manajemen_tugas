<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutentifikasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Tugas;

// ==================== RUTE PUBLIK (TANPA LOGIN) ====================
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/fitur', function () {
    return view('fitur');
})->name('fitur');

// Autentifikasi User (Guest)
Route::get('autentifikasi/login', [AutentifikasiController::class, 'showLogin'])->name('login');
Route::post('autentifikasi/login', [AutentifikasiController::class, 'login']);
Route::get('autentifikasi/regis', [AutentifikasiController::class, 'showRegister'])->name('register');
Route::post('autentifikasi/regis', [AutentifikasiController::class, 'register']);

// Autentifikasi Admin (Guest)
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


// ==================== RUTE PROTECTED USER (WAJIB LOGIN USER) ====================
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile.setting');

    // Manajemen Utama Tugas
    Route::get('/daftar_tugas', [TugasController::class, 'index'])->name('daftar.tugas');
    Route::get('/tambah_tugas', function () {
        return view('tambah_tugas');
    })->name('tugas.tambah');
    Route::post('/tambah_tugas', [TugasController::class, 'store'])->name('tugas.store');

    // Detail, Edit, Update, Delete Tugas
    Route::get('/tugas/detail/{id}', [TugasController::class, 'show'])->name('tugas.show');
    Route::get('/tugas/{id}/edit', [TugasController::class, 'edit'])->name('tugas.edit');
    Route::put('/tugas/{id}', [TugasController::class, 'update'])->name('tugas.update');
    Route::delete('/tugas/{id}', [TugasController::class, 'destroy'])->name('tugas.destroy');

    // Fitur Tambahan (Notifikasi & Logout)
    Route::post('/logout', [AutentifikasiController::class, 'logout'])->name('logout');

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
    })->name('notif.readall');

    // Live Search API
    Route::get('/api/search-tugas', function(Request $request) {
        $keyword = $request->query('search');

        if (empty($keyword)) {
            return response()->json([]);
        }

        $tugas = Tugas::where('user_id', Auth::id())
            ->where(function($q) use ($keyword) {
                $q->where('judul', 'LIKE', "%{$keyword}%")
                  ->orWhere('deskripsi', 'LIKE', "%{$keyword}%");
            })
            ->take(5)
            ->get(['id', 'judul', 'deskripsi', 'deadline']);

        $tugas->transform(function($item) {
            $item->formatted_deadline = $item->deadline ? \Carbon\Carbon::parse($item->deadline)->format('d/m/Y') : '-';
            return $item;
        });

        return response()->json($tugas);
    })->name('api.search');

}); // <--- PENUTUP MIDDLEWARE AUTH USER YANG BENAR


// ==================== RUTE PROTECTED ADMIN (WAJIB LOGIN ADMIN) ====================
// Catatan: Ganti 'auth' menjadi 'auth:admin' jika Anda menggunakan multi-auth guard admin bawaan Laravel
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/pengguna', [AdminController::class, 'pengguna'])->name('admin.pengguna');
});
