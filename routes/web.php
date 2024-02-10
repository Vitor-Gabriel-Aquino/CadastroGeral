<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaJuridicaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/clientes', ClientesController::class)->except(['show']);
Route::resource('/pessoasjuridicas', PessoaJuridicaController::class)->except(['show']);
Route::resource('/funcionarios', FuncionarioController::class)->except(['index', 'show']);