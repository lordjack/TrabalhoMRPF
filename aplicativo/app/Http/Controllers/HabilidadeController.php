<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabilidadeController extends Controller
{
  public function listar(){
    $habilidades = Habilidade::get();

    return view('halibidades')->with('halibidades',$halibidades);
  }
}
