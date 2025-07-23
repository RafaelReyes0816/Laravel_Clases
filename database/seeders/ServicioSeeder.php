<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicios = ['agua', 'luz', 'gas', 'internet'];

        foreach ($servicios as $servicio) {
            Servicio::create(['nombre' => $servicio]);
        }
    }
}
