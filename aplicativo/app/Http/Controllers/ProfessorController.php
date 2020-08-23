<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
  public function listar(){
    $professor = Professor::get();

    return view('professores')->with('professores',$professor);
  }
  public function cadastrar()
  {
    return view('professorCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $professor = new Professor();
    $professor->pessoa_id = $request->input('pessoa_id');
    $professor->area = $request->input('area');
    $professor->titulacao = $request->input('titulacao');
    $professor->formacao = $request->input('formacao');

    $professor->save();

    return redirect()->action('ProfessorController@listar');
    }
}
public function editar($id)
{
  $professor = Professor::find($id);

  return view('professorEditar')->with('professores',$professor);
}

public function deletar($id)
{
  $professor = Professor::find($id);

  if (empty($professor)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $professor->delete();

  return redirect()->action('ProfessorController@listar');
}
}
