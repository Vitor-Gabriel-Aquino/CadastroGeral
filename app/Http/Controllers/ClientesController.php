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
        $nomeCliente = $request->input('name');
        $cliente = new Cliente();
        $cliente->name = $nomeCliente;


        $emailCliente = $request->input('email');
        $cliente->email = $emailCliente;


        $cpfCliente = $request->input('cpf');
        $cliente->cpf = $cpfCliente;
        $cliente->save();
        return redirect('/clientes');
    }
}