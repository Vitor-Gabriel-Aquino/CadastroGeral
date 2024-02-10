<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePessoaJuridicaTableIdFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pessoa_juridica', function (Blueprint $table) {
            $table->unsignedBigInteger('id_funcionario')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoa_juridica', function (Blueprint $table) {
            $table->unsignedBigInteger('id_funcionario')->change();
        });
    }
}