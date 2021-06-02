<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsavel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsavel', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            //  $table->foreignId('resp_id')->nullable()->constrained('aluno');
            $table->string('contato');
            $table->foreignId('resp_id')->constrained('aluno');
            //  $table->bigInteger('resp_id');
            // $table->foreign('resp_id')->references('id')->on('aluno');
            //    $table->foreign('resp_id')->references('id')->on('aluno');

            $table->timestamps();
        });
        /* Schema::table('responsavel', function ($table) {
            $table->foreign('resp_id')->references('id')->on('aluno');
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsavel');
    }
}
