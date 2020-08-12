<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurmaController extends Controller
{
  public function listar(){
    $turmas = Turma::get();

    return view('turmas')->with('turmas',$turmas);
  }

}
