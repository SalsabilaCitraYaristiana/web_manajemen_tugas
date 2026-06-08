<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tugas;
use App\Notifications\notifdeadline;
use Carbon\Carbon;

class UpdateUserLastSeen
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            $user->update([
                'last_seen' => now()
            ]);

            $daftarTugas = Tugas::where('user_id', $user->id)->get();

            foreach ($daftarTugas as $tugas) {
                if ($tugas->status === 'Selesai') {
                    $user->Notifications()
                        ->where('data->tugas_id', $tugas->id)
                        ->where('data->status_tugas', '!=','Selesai')
                        ->delete();

                    $notifSelesaiAda = $user->notifications()
                        ->where('data->tugas_id', $tugas->id)
                        ->where('data->status_tugas', 'Selesai')
                        ->exists();

                    if (!$notifSelesaiAda) {
                        $user->notify(new notifdeadline($tugas, 0)); 
                    }
                    continue; 
                }

                $user->notifications()
                    ->where('data->tugas_id', $tugas->id)
                    ->where('data->status_tugas', 'Selesai')
                    ->delete();
                    
                $deadline = Carbon::parse($tugas->deadline)->startOfDay();
                $hariIni = Carbon::now()->startOfDay();
                $sisaHari = $hariIni->diffInDays($deadline, false);

                if ($sisaHari >= 0 && $sisaHari <= 2) {
                    $notifSudahAda = $user->notifications()
                        ->where('data->tugas_id', $tugas->id)
                        ->where('data->status_tugas', '!=', 'Selesai')
                        ->exists();

                    if (!$notifSudahAda) {
                        $user->notify(new notifdeadline($tugas, $sisaHari));
                    }
                }
            }
        }

        return $next($request);
    }
}