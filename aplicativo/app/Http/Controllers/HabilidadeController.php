<?php

namespace App\Http\Controllers;

use App\Habilidade;
use Illuminate\Http\Request;

class HabilidadeController extends Controller
{
  public function listar(){
    $habilidade = Habilidade::get();

    return view('halibidades')->with('halibidades',$halibidade);
  }
  public function cadastrar()
  {
    return view('habilidadeCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $habilidade = new Habilidade();
    $habilidade->nome = $request->input('nome');
    $habilidade->peso_competencia = $request->input('peso_competencia');
    $habilidade->questionario_id = $request->input('questionario_id');

    $habilidade->save();

    return redirect()->action('HabilidadeController@listar');
    }
}
public function editar($id)
{
  $habilidade = Habilidade::find($id);

  return view('habilidadeEditar')->with('habilidades',$habilidade);
}

public function deletar($id)
{
  $habilidade = Habilidade::find($id);

  if (empty($habilidade)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $habilidade->delete();

  return redirect()->action('HabilidadeController@listar');
}

}
