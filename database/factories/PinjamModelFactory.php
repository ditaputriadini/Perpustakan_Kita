<?php

namespace Database\Factories;

use App\Models\PinjamModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PinjamModel>
 */
class PinjamModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_petugas' => \App\Models\PetugasModel::inRandomOrder()->first()->id_petugas,
            'id_anggota' => \App\Models\AnggotaModel::inRandomOrder()->first()->id_anggota,
            'id_buku' => \App\Models\BukuModel::inRandomOrder()->first()->id_buku,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
