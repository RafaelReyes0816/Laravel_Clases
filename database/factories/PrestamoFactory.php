<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use \App\Models\Prestamo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestamo>
 */
class PrestamoFactory extends Factory
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
            'fecha_prestamo'=>fake()->date(),
            'estado'=>fake()->randomElement(['pendiente', 'devuelto']),
            'idcliente'=>\App\Models\Cliente::factory(),
            'idlibro'=>\App\Models\Libro::factory(),
        ];
    }
}
