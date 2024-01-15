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
            'nisn' =>  $this->faker->numerify('##########'),
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->dateTime(),
            'asal_sekolah' => 'Politeknik Negeri Banjarmasin',
            'jenis_kelamin' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            'jurusan' => 'Teknik Elektro',
            'nama_ayah' => $this->faker->firstNameMale,
            'pekerjaan_ayah' => 'dokter',
            'nama_ibu' => $this->faker->firstNameFemale,
            'pekerjaan_ibu' => 'guru',
            'penghasilan_orang_tua' => 20000000,
        ];
    }
}
