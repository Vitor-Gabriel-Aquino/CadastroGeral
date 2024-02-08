<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateSupport;
use Illuminate\Support\Facades\DB;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{

    public function create() {
        return view('clientes.create');
    }

    public function store(StoreUpdateSupport $request) {
        
        Funcionario::create($request->all());
        return to_route('clientes.index');
    }
}
