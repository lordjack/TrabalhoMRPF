<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
  public function listar(){
    $professores = Professor::get();

    return view('professores')->with('professores',$professores);
  }
}
