<?php

namespace App\Http\Controllers;

use App\Curso_disciplina;
use Illuminate\Http\Request;

class Curso_disciplinaController extends Controller
{
  public function listar(){
    $curso_disciplina = Curso_disciplina::get();

    return view('cursos_disciplinas')->with('cursos_disciplinas',$curso_disciplina);
  }
  public function cadastrar()
  {
    return view('curso_disciplinaCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $curso_disciplina = new Curso_disciplina();
    $curso_disciplina->disciplina_id = $request->input('disciplina_id');
    $curso_disciplina->curso_id = $request->input('curso_id');
    $curso_disciplina->professor_id = $request->input('professor_id');

    $curso_disciplina->save();

    return redirect()->action('Curso_disciplinaController@listar');
    }
}
public function editar($id)
{
  $curso_disciplina = Curso_disciplina::find($id);

  return view('curso_disciplinaEditar')->with('curso_disciplinas',$curso_disciplina);
}

public function deletar($id)
{
  $curso_disciplina = Curso_disciplina::find($id);

  if (empty($curso_disciplina)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $curso_disciplina->delete();

  return redirect()->action('Curso_disciplinaController@listar');
}

}
