<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

class ClientesController extends Controller 
{
    public function index(Request $request) {
        $clientes = Cliente::query()
        // ->where('ativo', true)  // Adiciona a condição para clientes ativos
        ->orderBy('name')
        ->get();

        $mensagemSucesso = session('mensagem.sucesso');


        return view('clientes.index')->with('clientes', $clientes)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(Request $request) {

        return view('clientes.create');
    }

    public function store(Request $request) {
        
        $cliente = Cliente::create($request->all());
        $request->session()->flash('mensagem.sucesso', "Cliente {$cliente->name} adicionado com sucesso!");
        return to_route('clientes.index');
    }

    public function destroy(Request $request) {
        // $cliente = Cliente::find($request->cliente);

        // if ($cliente) {
        //     $cliente->update(['ativo' => false]);
        // }
        $cliente = Cliente::find($request->cliente);

        if ($cliente) {
            $nomeCliente = $cliente->name;
            $cliente->delete();
            $request->session()->flash('mensagem.sucesso', "Cliente {$nomeCliente} removido com sucesso!");
        }
    
        return redirect()->route('clientes.index');
    }
}