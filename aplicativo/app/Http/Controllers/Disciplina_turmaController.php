<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Disciplina_turmaController extends Controller
{
  public function listar(){
    $disciplinas_turmas = Disciplina_turma::get();

    return view('disciplinas_turmas')->with('disciplinas_turmas',$disciplinas_turmas);
  }
}
