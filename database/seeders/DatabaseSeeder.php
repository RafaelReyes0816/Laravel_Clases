<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(5)->create();


        $this->call([
            LibroSeeder::class,
            ProductoSeeder::class,
            PedidoSeeder::class,
            ServicioSeeder::class,
            CiudadanoSeeder::class,
        ]);
    }
}
