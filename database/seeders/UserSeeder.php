<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
        {
            // Mengisi data pengguna ke dalam tabel users
            User::create([
                'name' => 'administrator',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin')
            // Menggunakan Hash::make untuk mengenkripsi password
            ]);
            // Verifikasi kata sandi saat pengguna mencoba masuk
            $email = 'admin@admin.com';
            if (Hash::check($email,$password)) {
             }
             else {
              // Kata sandi tidak cocok, tolak akses
              }
            }
}
