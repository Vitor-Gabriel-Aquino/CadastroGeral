<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

class ClientesController extends Controller 
{
    public function index() {
        $clientes = Cliente::query()
            ->orderBy('name')
            ->get();

        return view('clientes.index') -> with('clientes', $clientes);
    }

    public function create() {
        return view('clientes.create');
    }

    public function store(Request $request) {
        
        Cliente::create($request->all());
        return to_route('clientes.index');
    }
}