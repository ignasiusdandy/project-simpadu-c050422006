<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'lecturer_id' => 1 + $this->faker->unique()->numberBetween(1, 30),
            'semester' => 'Ganjil',
            'academic_year' => '2021/2022',
            'sks' => 3,
            'code' => \Faker\Provider\Base::randomElement(['RYY137', 'RWD075', 'YVE895', 'EYB931']),
            'description' => fake()->paragraph(),
        ];
    }
}
