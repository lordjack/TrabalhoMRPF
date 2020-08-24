<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Escola;
use Illuminate\Http\Request;

class CursoController extends Controller
{
  public function listar(){
    $curso = Curso::get();

    foreach ($curso as $item) {
      $escola = Escola::find($item->escola_id);
      $item->escola = $escola->nome;

    }

    return view('cursos')->with('cursos',$curso);
  }
  public function cadastrar()
  {
    return view('cursoCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $curso = new Curso();
    $curso->nome = $request->input('nome');
    $curso->escola_id = $request->input('escola_id');
    $curso->data_inicio = $request->input('data_inicio');
    $curso->data_fim = $request->input('data_fim');

    $curso->save();

    return redirect()->action('CursoController@listar');
    }
  }
  public function editar($id)
  {
    $curso = Curso::find($id);

    return view('cursoEditar')->with('cursos',$curso);
  }

  public function deletar($id)
  {
    $curso = Curso::find($id);

    if (empty($curso)) {
      return '<h2>Houve um problema ao consultar o ID informado</h2>';
    }
    $curso->delete();

    return redirect()->action('CursoController@listar');
  }

}
