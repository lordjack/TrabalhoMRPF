<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
  public function listar(){
    $curso = Curso::get();

    return view('cursos')->with('cursos',$cursos);
  }

}
