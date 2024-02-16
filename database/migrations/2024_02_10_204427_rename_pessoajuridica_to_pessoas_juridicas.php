<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::rename('pessoa_juridica', 'pessoas_juridicas');
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::rename('pessoas_juridicas', 'pessoajuridica');
}
};
