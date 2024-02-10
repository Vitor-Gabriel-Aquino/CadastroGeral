<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pessoajuridica;

class PessoaJuridicaController extends Controller
{
    public function index(Request $request)
    {
        $pessoaJuridica = PessoaJuridica::query()
            // ->where('ativo', true)  // Adiciona a condição para clientes ativos
            ->orderBy('name')
            ->get();

        $mensagemSucesso = session('mensagem.sucesso');


        return view('clientes.index')->with('pessoasjuridicas', $pessoaJuridica)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(Request $request)
    {

        return view('clientes.juridico');
    }

    public function store(Request $request)
    {

        $pessoaJuridica = PessoaJuridica::create($request->all());

        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente {$pessoaJuridica->name} adicionado com sucesso!");
    }

    public function destroy(PessoaJuridica $pessoaJuridica)
    {

        // $pessoaJuridica = PessoaJuridica::find($request->pessoajuridica);

        // if ($pessoaJuridica) {
        //     $pessoaJuridica->update(['ativo' => false]);
        // }

        $pessoaJuridica->delete();

        return redirect()->route('clientes.index')
            ->with('mensagem.sucesso', "Cliente {$pessoaJuridica->name} removido com sucesso!");
    }

    public function edit(PessoaJuridica $pessoaJuridica) {
        return view('clientes.edit')->with('pessoasjuridicas', $pessoaJuridica);
    }

    public function update(PessoaJuridica $pessoaJuridica, Request $request) {
        
        $pessoaJuridica->update($request->all());


        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente {$pessoaJuridica->name} atualizado com sucesso!");
    }
}

