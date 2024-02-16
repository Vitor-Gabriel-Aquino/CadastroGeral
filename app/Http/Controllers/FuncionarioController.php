<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    
    public function index(Request $request)
    {
        $funcionario = Funcionario::query()
            // ->where('ativo', true)  // Adiciona a condição para clientes ativos
            ->orderBy('name')
            ->get();

        $mensagemSucesso = session('mensagem.sucesso');


        return view('clientes.index')->with('clientes', $funcionario)->with('mensagemSucesso', $mensagemSucesso);
    }


    public function create(Request $request)
    {

        return view('funcionarios.create');
    }

    public function store(Request $request)
    {
        $funcionario = Funcionario::create($request->all());
    
        return redirect()->route('pessoasjuridicas.create')
            ->with('mensagem.sucesso', "Funcionário {$funcionario->name} adicionado com sucesso!");
    }
    

    public function destroy(Funcionario $funcionarios)
    {

        // $funcionarios = Funcionario::find($request->funcionarios);

        // if ($funcionarios) {
        //     $funcionarios->update(['ativo' => false]);
        // }

        $funcionarios->delete();

        return redirect()->route('pessoasjuridicas.index')
            ->with('mensagem.sucesso', "O funcionario {$funcionarios->name} removido com sucesso!");
    }

    public function edit(Funcionario $funcionarios) {
        return view('funcionarios.edit')->with('funcionarios', $funcionarios);
    }

    public function update(Funcionario $funcionarios, Request $request) {
        
    $funcionarios->update($request->all());

    return redirect()->route('pessoasjuridicas.index')
        ->with('mensagem.sucesso', "O Funcionario {$funcionarios->name} atualizado com sucesso!");
}
}
