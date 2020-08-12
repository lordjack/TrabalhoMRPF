<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatriculaController extends Controller
{
  public function listar(){
    $matriculas = Matricula::get();

    return view('matriculas')->with('matriculas',$matriculas);
  }

}
