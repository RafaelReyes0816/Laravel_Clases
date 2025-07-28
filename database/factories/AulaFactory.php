<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aula>
 */
class AulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->randomElement(['Aula', 'Laboratorio', 'Sala']) . ' ' . $this->faker->numberBetween(1, 50),
            'capacidad' => $this->faker->numberBetween(1, 50),
            'sigla' => strtoupper($this->faker->lexify('???###')),
        ];
    }
}
