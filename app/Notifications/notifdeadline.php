<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class notifdeadline extends Notification
{
    use Queueable;

    public $tugas;
    public $sisaHari;

    public function __construct($tugas, $sisaHari)
    {
        $this->tugas = $tugas;
        $this->sisaHari = $sisaHari;
    }


    public function via($notifiable)
    {
        return ['database'];
    }


    public function toArray($notifiable)
    {
        return [
            'tugas_id' => $this->tugas->id,
            'judul'    => $this->tugas->judul,
            'pesan'    => "Tugas '" . $this->tugas->judul . "' mendekati deadline dalam " . $this->sisaHari . " hari lagi!",
            'deadline' => $this->tugas->deadline,
        ];
    }
}
