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
                'email' => 'admin@fokusin.com'
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
