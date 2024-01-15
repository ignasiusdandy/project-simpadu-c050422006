<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_pendaftaran' =>  1 + $this->faker->unique()->numberBetween(1, 100),
            'nisn' => 2010400,
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->dateTime(),
            'asal_sekolah' => 'unlam',
            'jenis_kelamin' => 'lelaki',
            'jurusan' => 'elektro',
            'nama_ayah' => 'udin',
            'pekerjaan_ayah' => 'dokter',
            'nama_ibu' => 'pia',
            'pekerjaan_ibu' => 'tidur',
            'penghasilan_orang_tua' => 20000,
        ];
    }
}
