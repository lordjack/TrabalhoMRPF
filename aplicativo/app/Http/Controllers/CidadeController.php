<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidadeController extends Controller
{
  public function listar(){
    $cidades = Cidade::get();

    return view('cidades')->with('cidades',$cidades);
  }
}
