<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ciudadano;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ciudadano>
 */
class CiudadanoFactory extends Factory

{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->optional()->phoneNumber(),
            'servicio_agua' => $this->faker->boolean(80),
            'servicio_luz' => $this->faker->boolean(85),
            'servicio_gas' => $this->faker->boolean(60),
            'servicio_internet' => $this->faker->boolean(70),
        ];
    }
}
