<?php

namespace Database\Factories;

use App\Models\BukuModel;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->idBuku(),
            'kode_buku' => fake()->kodeBuku(),
            'judul' => fake()->judul(),
            'pengarang' => fake()->pengarang(),
            'kategori' => fake()->kategori(),
            'created_at' => fake()->createdAt(),
            'updated_at' => fake()->updatedAt(),
        ];
    }
}
