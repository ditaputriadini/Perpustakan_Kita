<?php

namespace Database\Factories;


use App\Models\BukuModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuModelFactory extends Factory
{
    protected $model = BukuModel::class;

    public function definition()
    {
        return [
            'kode_buku' => $this->faker->unique()->bothify('BKU-###'),
            'judul' => $this->faker->sentence(4),
            'pengarang' => $this->faker->name,
            'kategori' => $this->faker->randomElement(['Fiksi', 'Non-Fiksi']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
