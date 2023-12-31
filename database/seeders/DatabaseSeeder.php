<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Buku::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => '',
        //     'email' => '',

        // ]);

        $this->call(BukuSeeder::class);
        $this->call(AnggotaSeeder::class);
        $this->call(PetugasSeeder::class);
        $this->call(PeminjamanSeeder::class);
    }
}
