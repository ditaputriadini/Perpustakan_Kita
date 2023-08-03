<?php

namespace Database\Seeders;

use App\Models\AnggotaModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AnggotaModel::factory()->count(10)->create();
    }
}
