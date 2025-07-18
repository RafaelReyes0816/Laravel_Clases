<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;
    //
    public function prestamos()
    {
        return $this->hasMany(\App\Models\Prestamo::class, 'idcliente');
    }
}
