<?php

namespace Database\Seeders;

use App\Models\PinjamModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PinjamModel::factory()->count(10)->create();
    }
}
