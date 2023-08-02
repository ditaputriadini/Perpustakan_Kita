<?php

namespace Database\Seeders;


use App\Models\BukuModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        BukuModel::factory()->count(10)->create();
    }
}


