<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionarioController extends Controller
{
  public function listar(){
    $questionarios = Questionario::get();

    return view('questionarios')->with('questionarios',$questionarios);
  }
}
