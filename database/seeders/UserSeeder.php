<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'password' =>bcrypt('admin')
            // Menggunakan Hash::make untuk mengenkripsi password
            ]);

            // User::create([
            //     'name' => 'Jane Smith',
            //     'email' => 'jane@example.com',
            // //     'password' => Hash::make('secret456'),
            // ]);

            // Anda dapat menambahkan data pengguna lainnya sesuai kebutuhan
        }
}
