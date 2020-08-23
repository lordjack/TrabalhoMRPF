<?php

namespace App\Http\Controllers;

use App\Disciplina_turma;
use Illuminate\Http\Request;

class Disciplina_turmaController extends Controller
{
  public function listar(){
    $disciplina_turma = Disciplina_turma::get();

    return view('disciplinas_turmas')->with('disciplinas_turmas',$disciplina_turma);
  }
  public function cadastrar()
  {
    return view('disciplina_turmaCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $disciplina_turma = new Disciplina_turma();
    $curso_disciplina->disciplina_id = $request->input('disciplina_id');
    $curso_disciplina->turma_id = $request->input('turma_id');

    $disciplina_turma->save();

    return redirect()->action('Disciplina_turmaController@listar');
    }
}
public function editar($id)
{
  $disciplina_turma = Disciplina_turma::find($id);

  return view('disciplina_turmaEditar')->with('disciplina_turmas',$disciplina_turma);
}

public function deletar($id)
{
  $disciplina_turma = Disciplina_turma::find($id);

  if (empty($disciplina_turma)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $disciplina_turma->delete();

  return redirect()->action('Disciplina_turmaController@listar');
}

}
