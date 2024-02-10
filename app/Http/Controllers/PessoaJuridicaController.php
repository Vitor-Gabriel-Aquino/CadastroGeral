<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateSupport;
use Illuminate\Support\Facades\DB;
use App\Models\PessoaJuridica;

class PessoaJuridicaController extends Controller
{

    public function create() {
        return view('clientes.create');
    }

    public function store(Request $request) {
        
        PessoaJuridica::create($request->all());
        return to_route('clientes.index');
    }
}
