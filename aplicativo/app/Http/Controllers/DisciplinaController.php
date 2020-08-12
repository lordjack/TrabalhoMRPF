<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
  public function listar(){
    $disciplinas = Disciplina::get();

    return view('disciplinas')->with('disciplinas',$disciplinas);
  }
}
