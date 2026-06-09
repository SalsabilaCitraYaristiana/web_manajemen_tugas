<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // bikin akun admin default
        User::firstOrCreate(
            [   // nyari data
                'email' => 'admin@fokusin.com' // karena email bersifat unik dan digunakan untuk mengecek apakah akun admin sudah ada atau belum
            ],
            [   // klo gda, buat ini
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => Hash::make('admin123'),
                'role' => 'admin'
            ]
        );
    }
}
