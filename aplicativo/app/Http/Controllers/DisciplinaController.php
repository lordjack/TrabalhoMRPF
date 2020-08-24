<?php

namespace App\Http\Controllers;

use App\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
  public function listar(){
    $disciplina = Disciplina::get();

    return view('disciplinas')->with('disciplinas',$disciplina);
  }
  public function cadastrar()
  {
    return view('disciplinaCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $disciplina_turma = new Disciplina();
    $curso_disciplina->nome = $request->input('nome');
    $curso_disciplina->carga_horaria = $request->input('carga_horaria');

    $disciplina_turma->save();

    return redirect()->action('DisciplinaController@listar');
    }
}
public function editar($id)
{
  $disciplina = Disciplina::find($id);

  return view('disciplinaEditar')->with('disciplinas',$disciplina);
}

public function deletar($id)
{
  $disciplina = Disciplina::find($id);

  if (empty($disciplina)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $disciplina->delete();

  return redirect()->action('DisciplinaController@listar');
}

}
