<?php

namespace Database\Seeders;
use App\Models\Register;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Register::factory(30)->create();

        Register::create([
            'npwp' => 4356879548,
            'nama' => 'Wahyu',
            'no_ktp' => '621030409030009',
            'alamat_ktp' => 'Tamiang Layang, Barito Timur',
            'ttl' => 'Banjarmasin, 4 September',
            'jenis_kelamin' => 'Laki-laki',
            'email' => 'c050422044@gmail.com',
            'no_hp' => '081258797682',
            'no_telp' => '911',
            'no_npwp' => 'Orang Pribadi',
            'kependudukan' => 'Dalam Negeri',
        ]);
    }
}
