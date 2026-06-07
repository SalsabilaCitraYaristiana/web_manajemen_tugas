<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $currentUser = Auth::user();

        if ($currentUser) {
            /** @var \App\Models\User $user */
            $user = $currentUser;

            $tugasBelumSelesai = Tugas::where('user_id', $user->id)
                ->where('status', '!=', 'Selesai')
                ->get();

            foreach ($tugasBelumSelesai as $tugas) {
                if ($tugas->deadline) {
                    $deadline = Carbon::parse($tugas->deadline);
                    $hariIni = Carbon::now()->startOfDay();
                    $sisaHari = $hariIni->diffInDays($deadline, false);

                    if ($sisaHari <= 2 && $sisaHari >= 0) {

                        $sudahAdaNotif = $user->unreadNotifications()
                            ->where('data->tugas_id', $tugas->id)
                            ->exists();

                        if (!$sudahAdaNotif) {
                            $user->notify(new \App\Notifications\notifdeadline($tugas, $sisaHari));
                        }
                    }
                }
            }
        }

        $tugasAktif = Tugas::where('user_id', Auth::id())
                            ->where('status', '!=', 'Selesai')
                            ->latest()
                            ->take(2)
                            ->get();

        $riwayatTugas = Tugas::where('user_id', Auth::id())
                             ->where('status', 'Selesai')
                             ->latest()
                             ->get();

        return view('dashboard', compact('tugasAktif', 'riwayatTugas'));
    }
}
