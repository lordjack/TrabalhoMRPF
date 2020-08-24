<?php

namespace App\Http\Controllers;

use App\Avaliacao;
use App\Questionario;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
  public function listar(){
    $avaliacao = Avaliacao::get();

    foreach ($avaliacao as $item) {
      $questionario = Questionario::find($item->questionario_id);

      $item->questionario = $questionario->titulo;

    }

    return view('avaliacoes')->with('avaliacoes',$avaliacao);
  }
  public function cadastrar()
  {
    return view('avaliacaoCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $avaliacao = new Avaliacao();
    $avaliacao->aluno_id = $request->input('aluno_id');
    $avaliacao->questionario_id = $request->input('questionario_id');
    $avaliacao->data = $request->input('data');
    $avaliacao->save();

    return redirect()->action('AvaliacaoController@listar');
    }
}
public function editar($id)
{
  $avaliacao = Avaliacao::find($id);

  return view('avaliacaoEditar')->with('avaliacoes',$avaliacao);
}

public function deletar($id)
{
  $avaliacao = Avaliacao::find($id);

  if (empty($avaliacao)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $avaliacao->delete();

  return redirect()->action('AvaliacaoController@listar');
}

}
