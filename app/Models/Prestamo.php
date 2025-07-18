<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    //
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'idcliente');
    }

    public function libro()
    {
        return $this->belongsTo(\App\Models\Libro::class, 'idlibro');
    }
}
