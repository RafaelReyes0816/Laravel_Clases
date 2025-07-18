<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //

    use HasFactory;

    protected $fillable=[
        'titulo',
        'autor',
        'editorial',
        'anio',
        'fecha_publicacion',
        'DOI',
        'categoria',
        'estado_libro',
    ];

    protected $casts = [
        'estado_libro' => 'boolean',
    ];
}
