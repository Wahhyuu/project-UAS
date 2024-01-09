<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Register>
 */
class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'npwp' =>$this-> faker->unique()->randomNumber(),
            'nama' =>$this-> faker->name(),
            'no_ktp' =>$this-> faker->unique()->randomNumber(),
            'alamat_ktp' =>$this-> faker->streetAddress(),
            'ttl' =>$this-> faker->dateTime(), //Format tanggal bulan tahun
            'jenis_kelamin' =>$this-> faker->randomElement(['Laki-laki', 'Perempuan']),
            'email' =>$this-> faker->Unique()->safeEmail(),
            'no_hp' =>$this-> faker->phoneNumber(),
            'no_telp' =>$this-> faker->phoneNumber(),
            'no_npwp' =>$this-> faker->randomElement(['Orang Pribadi', 'Badan', 'BUT']),
            'kependudukan' =>$this->faker->randomElement(['Dalam Negeri', 'Luar Negeri']),
        ];
    }
}
