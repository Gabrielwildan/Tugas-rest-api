<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelanggantoko>
 */
class PelanggantokoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pelanggan' => 'Yanto',
            'alamat' => 'Ngawi',
            'telp' => 69696,
            'email' => 'yantogeming@gmail.com',
            'password' => 'yantoganteng123',
            'status' => 1,
        ];
    }
}
