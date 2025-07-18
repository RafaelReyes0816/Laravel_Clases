<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Prestamo;

class PrestamoSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Prestamo::factory()->count(10)->create();
    }
}
