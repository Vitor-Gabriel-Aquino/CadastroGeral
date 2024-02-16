<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index(Request $request)
    {
        $cliente = Cliente::query()
            // ->where('ativo', true)  // Adiciona a condição para clientes ativos
            ->orderBy('name')
            ->get();

        $mensagemSucesso = session('mensagem.sucesso');


        return view('clientes.index')->with('clientes', $cliente)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(Request $request)
    {

        return view('clientes.create');
    }

    public function store(Request $request)
    {
    

        $cliente = Cliente::create($request->all());

        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente {$cliente->name} adicionado com sucesso!");
    }

    public function destroy(Cliente $cliente)
    {

        // $cliente = Cliente::find($request->cliente);

        // if ($cliente) {
        //     $cliente->update(['ativo' => false]);
        // }

        $cliente->delete();

        return redirect()->route('clientes.index')
            ->with('mensagem.sucesso', "Cliente {$cliente->name} removido com sucesso!");
    }

    public function edit(Cliente $cliente) {

        return view('clientes.edit')->with('cliente', $cliente);
    }

    public function update(Cliente $cliente, Request $request) {
        
        $cliente->update($request->all());


        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente {$cliente->name} atualizado com sucesso!");
    }
}