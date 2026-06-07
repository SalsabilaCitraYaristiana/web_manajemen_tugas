<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    // Menentukan nama tabel secara eksplisit
    protected $table = 'tugas';

    // Kolom yang boleh diisi langsung via form
    protected $fillable = [
        'user_id',
        'judul',
        'deskripsi',
        'deadline',
        'prioritas',
        'status',
    ];
}