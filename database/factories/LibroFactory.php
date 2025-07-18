<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'titulo'=>fake()->sentence(5),
            'autor'=>fake()->name,
            'editorial'=>fake()->company(),
            'anio'=>fake()->numberBetween(2000, 2015),
            'fecha_publicacion'=>fake()->date(),
            //'DOI'=>fake()->uuid()
            'DOI' => '10.' . fake()->numberBetween(1000,9999) . '/' . fake()->bothify('????-#####'),
            'categoria' => fake()->randomElement(['programación', 'diseño', 'análisis']),
            'estado_libro' => fake()->boolean(),
        ];
    }
}
