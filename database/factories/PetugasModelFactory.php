<?php

namespace Database\Factories;

use App\Models\PetugasModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetugasModel>
 */
class PetugasModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_petugas' => $this->faker->name,
            'hp' => $this->faker->phoneNumber,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
