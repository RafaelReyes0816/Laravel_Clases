<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = [
        'sigla',
        'semestre',
        'carga',
        'pre_requisito',
        'aula_id'
    ];

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }
} 