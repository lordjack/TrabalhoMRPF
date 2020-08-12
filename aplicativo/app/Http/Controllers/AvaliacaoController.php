<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
  public function listar(){
    $avaliacoes = Avaliacao::get();

    return view('avaliacoes')->with('avaliacoes',$avaliacoes);
  }
}
