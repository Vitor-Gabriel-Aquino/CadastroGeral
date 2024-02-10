<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pessoajuridica;

class PessoaJuridicaController extends Controller
{
    public function index(Request $request)
    {
        $pessoajuridica = PessoaJuridica::query()
            // ->where('ativo', true)  // Adiciona a condição para clientes ativos
            ->orderBy('name')
            ->get();

        $mensagemSucesso = session('mensagem.sucesso');


        return view('pessoasjuridicas.index')->with('pessoajuridica', $pessoajuridica)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(Request $request)
    {

        return view('pessoasjuridicas.create');
    }

    public function store(Request $request)
    {

        $pessoajuridica = PessoaJuridica::create($request->all());

        return to_route('pessoasjuridicas.index')
            ->with('mensagem.sucesso', "Cliente {$pessoajuridica->name} adicionado com sucesso!");
    }

    public function destroy(PessoaJuridica $pessoajuridica)
    {

        // $pessoajuridica = PessoaJuridica::find($request->pessoajuridica);

        // if ($pessoajuridica) {
        //     $pessoajuridica->update(['ativo' => false]);
        // }

        $pessoajuridica->delete();

        return redirect()->route('pessoasjuridicas.index')
            ->with('mensagem.sucesso', "Cliente {$pessoajuridica->name} removido com sucesso!");
    }

    public function edit(PessoaJuridica $pessoajuridica) {
        return view('pessoasjuridicas.edit')->with('pessoajuridica', $pessoajuridica);
    }

    public function update(PessoaJuridica $pessoajuridica, Request $request) {
        
        $pessoajuridica->update($request->all());


        return to_route('pessoasjuridicas.index')
            ->with('mensagem.sucesso', "Cliente {$pessoajuridica->name} atualizado com sucesso!");
    }
}

