<?php

namespace Database\Seeders;

use App\Models\PetugasModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PetugasModel::factory()->count(10)->create();
    }
}
