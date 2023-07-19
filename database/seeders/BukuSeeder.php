<?php

namespace Database\Seeders;

use App\Models\BukuModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
        [
            'kode_buku' => '01',
            'judul' => 'Kau, aku dan Sepucuk Angpao Merah',
            'pengarang' => 'Tereliye',
            'Kategori' => 'Romance',
        ],

        ]);
    }
}
