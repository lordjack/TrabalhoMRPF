<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
  public function listar(){

    $avaliacao = Avaliacao::get();

    return view('avaliacoes')->with('avaliacoes',$avaliacao);
  }


  public function cadastrar()
  {
    return view('avaliacaoCadastrar');
  }

  public function salvar(Request $request, $id)
  {
    if ($id == 0){
    $avaliacao = new Avaliacao();
    $avaliacao->aluno_id = $request->input('aluno_id');
    $avaliacao->data = $request->input('data');
    $avaliacao->competencia1 = $request->input('competencia1');
    $avaliacao->competencia2 = $request->input('competencia2');
    $avaliacao->competencia3 = $request->input('competencia3');
    $avaliacao->nota_final = $request->input('nota_final');

    $avaliacao->save();

    return redirect()->action('AvaliacaoController@listar');
  }else {
    $avaliacao = Avaliacao::find($id);
    $avaliacao->aluno_id = $request->input('aluno_id');
    $avaliacao->data = $request->input('data');
    $avaliacao->competencia1 = $request->input('competencia1');
    $avaliacao->competencia2 = $request->input('competencia2');
    $avaliacao->competencia3 = $request->input('competencia3');
    $avaliacao->nota_final = $request->input('nota_final');

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
