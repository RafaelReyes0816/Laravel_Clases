<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // Buscar clientes cuyo nombre contenga "ded"
        $clientes = \App\Models\Cliente::where('nombre', 'like', '%de%')->get();
        return view('clientes.index', compact('clientes'));
    }
}
