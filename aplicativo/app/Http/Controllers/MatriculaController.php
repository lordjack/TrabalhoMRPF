<?php

namespace App\Http\Controllers;

use App\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
  public function listar(){
    $matricula = Matricula::get();

    return view('matriculas')->with('matriculas',$matricula);
  }
  public function cadastrar()
  {
    return view('matriculaCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $matricula = new Matricula();
    $matricula->matricula = $request->input('matricula');
    $matricula->curso_id = $request->input('curso_id');
    $matricula->turma_id = $request->input('turma_id');
    $matricula->aluno_id = $request->input('aluno_id');

    $matricula->save();

    return redirect()->action('MatriculaController@listar');
    }
}
public function editar($id)
{
  $matricula = Matricula::find($id);

  return view('matriculaEditar')->with('matriculas',$matricula);
}

public function deletar($id)
{
  $matricula = Matricula::find($id);

  if (empty($matricula)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $matricula->delete();

  return redirect()->action('MatriculaController@listar');
}
}
