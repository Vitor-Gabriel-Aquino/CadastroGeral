<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePessoajuridicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pessoajuridica', function (Blueprint $table) {
            $table->string('email')->nullable();
        });

        Schema::rename('pessoajuridica', 'pessoa_juridica');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('pessoa_juridica', 'pessoajuridica');

        Schema::table('pessoajuridica', function (Blueprint $table) {
            $table->dropColumn('email');
        });
    }
}