<?php

namespace App\Http\Controllers;

use App\Escola;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    public function listar(){
      $escolas = Escola::get();

      return view('escolas')->with('escolas',$escolas);
    }


}
