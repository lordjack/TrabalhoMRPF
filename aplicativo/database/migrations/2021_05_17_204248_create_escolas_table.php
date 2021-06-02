<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('cep', 12);
            $table->string('telefone', 20);
            $table->string('rua', 100);
            $table->string('numero', 100);
            $table->string('cnpj', 100);
            $table->string('email', 100);
            $table->string('sigla', 100);
            $table->string('cidade_id', 100);
            $table->string('bairro', 100);
            $table->string('tipo', 100);
            // nome, cep, telefone, rua, numero, cnpj,
            //email, sigla, cidade_id, bairro, tipo([municipal, estadual, federal])
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolas');
    }
}
