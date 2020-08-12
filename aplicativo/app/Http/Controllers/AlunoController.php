<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
  public function listar(){
    $alunos = Aluno::get();

    return view('alunos')->with('alunos',$alunos);
  }
}
