<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Aula;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materia>
 */
class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sigla' => strtoupper($this->faker->lexify('???###')),
            'semestre' => $this->faker->numberBetween(1, 10),
            'carga' => $this->faker->numberBetween(1, 100),
            'pre_requisito' => $this->faker->optional(0.7)->lexify('???###'),
            'aula_id' => Aula::inRandomOrder()->first()?->id ?? Aula::factory(),
        ];
    }
}
