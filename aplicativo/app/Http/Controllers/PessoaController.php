<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
  public function listar(){
    $pessoas = Pessoa::get();

    return view('pessoas')->with('pessoas',$pessoas);
  }
}
