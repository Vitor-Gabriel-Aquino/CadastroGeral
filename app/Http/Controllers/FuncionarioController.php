<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Funcionario;

class FuncionarioController extends Controller
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
        // Validar os dados recebidos, se necessário
    
        // Criar um novo funcionário com base nos dados recebidos
        $funcionario = Funcionario::create($request->all());
    
        // Retornar uma resposta JSON indicando o sucesso
        return response()->json(['success' => true, 'message' => 'Funcionário adicionado com sucesso']);
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

