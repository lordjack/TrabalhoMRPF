<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso_disciplinaController extends Controller
{
  public function listar(){
    $Cursos_Disciplinas = Curso_disciplina::get();

    return view('cursos_disciplinas')->with('cursos_disciplinas',$Cursos_Disciplinas);
  }
}
