<?php

namespace App\Http\Controllers;

use App\Rules\CpfValidation;
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
        return view('clientes.create', ['action' => route('clientes.store')]);
    }

    private function validateRequest(Request $request)
    {
        $messages = [
            'name.required' => 'O campo nome é obrigatório.',
            'name.min' => 'Insira ao menos 3 caracteres.',

            'email.required' => 'O campo email é obrigatório.',

            'cpf.required' => 'O campo CPF é obrigatório.',

        ];

        $validatedData = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'cpf' => ['required', new CpfValidation],
            'birthday' => ['nullable'],
            'cellphone' => ['nullable'],
            'telephone' => ['nullable'],
            'address' => ['nullable'],
            'complement' => ['nullable'],
            'number' => ['nullable'],
            'neighborhood' => ['nullable'],
            'zipCode' => ['nullable'],
            'city' => ['nullable'],
            'state' => ['nullable'],
        ], $messages);

        return $validatedData;
    }

    public function store(Request $request)
    {
        $validatedData = $this->validateRequest($request);

        $cliente = Cliente::create($validatedData);

        return redirect()->route('clientes.index')
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

    public function edit(Cliente $cliente) 
    {
        return view('clientes.edit', [
            'cliente' => $cliente,
            'action' => route('clientes.update', $cliente),

        ]);
    }

    public function update(Cliente $cliente, Request $request)
    {
        $validatedData = $this->validateRequest($request);

        $cliente->update($validatedData);

        return redirect()->route('clientes.index')
            ->with('mensagem.sucesso', "Cliente {$cliente->name} atualizado com sucesso!");
    }
}