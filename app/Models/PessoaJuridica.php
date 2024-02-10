<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaJuridica extends Model
{
    use HasFactory;
    protected $table = 'pessoajuridica';
    protected $fillable = ['name', 'cnpj', 'company_phone', 'address',
    'complement', 'number', 'neighborhood', 'zipCode', 'city', 'state', 'id_funcionario'];
}