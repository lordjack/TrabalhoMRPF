<?php

namespace App\Http\Controllers;

use App\Turma;
use App\Curso;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
  public function listar(){
    $turma = Turma::get();

    foreach ($turma as $item) {
      $curso = Curso::find($item->curso_id);

      $item->curso = $curso->nome;
    }

    return view('turmas')->with('turmas',$turma);
  }
  public function cadastrar()
  {
    return view('turmaCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $turma = new Turma();
    $turma->nome = $request->input('nome');
    $turma->curso_id = $request->input('curso_id');
    $turma->turno = $request->input('turno');
    $turma->serie = $request->input('serie');

    $turma->save();

    return redirect()->action('TurmaController@listar');
    }
}
public function editar($id)
{
  $turma = Turma::find($id);

  return view('turmaEditar')->with('turmas',$turma);
}

public function deletar($id)
{
  $turma = Turma::find($id);

  if (empty($turma)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $turma->delete();

  return redirect()->action('TurmaController@listar');
}
}
