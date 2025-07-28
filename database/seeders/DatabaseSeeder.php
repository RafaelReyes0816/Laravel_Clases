<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Materia;
use App\Models\Aula;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //usuario
        User::factory()->count(5)->create();

        //examen
        Aula::factory(30)->create();
        
        Materia::factory(30)->create();

        $this->call([
            LibroSeeder::class,
            ProductoSeeder::class,
            PedidoSeeder::class,
            ServicioSeeder::class,
            CiudadanoSeeder::class,
        ]);
    }
}
