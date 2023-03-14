<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barang' => 'Baju Muslim',
            'idkategori' => 1,
            'harga' => 5000,
            'deskripsi' => 'Baju muslim murah',
            'stock' => 10,
            'gambar' => 'Bajumuslim.jpg',
        ];
    }
}
