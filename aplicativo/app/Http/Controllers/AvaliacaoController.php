<?php

namespace App\Http\Controllers;

use App\Avaliacao;
use App\Aluno;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
  public function listar($id){
    if ($id != 0) {
      $avaliacao = Avaliacao::where('aluno_id', $id)->get();
    }else {
      $avaliacao = Avaliacao::get();
    }



    return view('avaliacoes')->with('avaliacoes',$avaliacao);
  }


  public function cadastrar($id)
  {

    $aluno = Aluno::find($id);

    return view('avaliacao')->with('aluno', $aluno);
    }


  public function salvar(Request $request, $id)
  {
    if ($id == 0){
    $avaliacao = new Avaliacao();
    $avaliacao->aluno_id = $request->input('aluno_id');
    $avaliacao->data = $request->input('data');
    $avaliacao->habilidade1 = $request->input('habilidade1');
    $avaliacao->habilidade2 = $request->input('habilidade2');
    $avaliacao->habilidade3 = $request->input('habilidade3');
    $avaliacao->habilidade4 = $request->input('habilidade4');
    $avaliacao->habilidade5 = $request->input('habilidade5');
    $avaliacao->habilidade6 = $request->input('habilidade6');
    $avaliacao->habilidade7 = $request->input('habilidade7');
    $avaliacao->habilidade8 = $request->input('habilidade8');
    $avaliacao->habilidade9 = $request->input('habilidade9');
    $avaliacao->habilidade10 = $request->input('habilidade10');
    $avaliacao->habilidade11 = $request->input('habilidade11');
    $avaliacao->habilidade12 = $request->input('habilidade12');
    $avaliacao->competencia1 = $request->input('competencia1');
    $avaliacao->competencia2 = $request->input('competencia2');
    $avaliacao->competencia3 = $request->input('competencia3');
    $avaliacao->nota_final = $request->input('nota_final');

    $avaliacao->save();
    $aluno = $avaliacao->aluno_id;

    return redirect()->action('AvaliacaoController@listar', $aluno);
  }else{
    $avaliacao = Avaliacao::find($id);
    $avaliacao->aluno_id = $request->input('aluno_id');
    $avaliacao->data = $request->input('data');
    $avaliacao->habilidade1 = $request->input('habilidade1');
    $avaliacao->habilidade2 = $request->input('habilidade2');
    $avaliacao->habilidade3 = $request->input('habilidade3');
    $avaliacao->habilidade4 = $request->input('habilidade4');
    $avaliacao->habilidade5 = $request->input('habilidade5');
    $avaliacao->habilidade6 = $request->input('habilidade6');
    $avaliacao->habilidade7 = $request->input('habilidade7');
    $avaliacao->habilidade8 = $request->input('habilidade8');
    $avaliacao->habilidade9 = $request->input('habilidade9');
    $avaliacao->habilidade10 = $request->input('habilidade10');
    $avaliacao->habilidade11 = $request->input('habilidade11');
    $avaliacao->habilidade12 = $request->input('habilidade12');
    $avaliacao->competencia1 = $request->input('competencia1');
    $avaliacao->competencia2 = $request->input('competencia2');
    $avaliacao->competencia3 = $request->input('competencia3');
    $avaliacao->nota_final = $request->input('nota_final');

    $avaliacao->save();
    $aluno = $avaliacao->aluno_id;

    return redirect()->action('AvaliacaoController@listar', $aluno);

  }
}

public function deletar($id)
{
  $avaliacao = Avaliacao::find($id);
  $aluno = $avaliacao->aluno_id;

  if (empty($avaliacao)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $avaliacao->delete();

  return redirect()->action('AvaliacaoController@listar', $aluno);
}
public function exibir($id)
{
  $avaliacao = Avaliacao::find($id);

  $aluno = Aluno::find($avaliacao->aluno_id);
  $avaliacao->aluno = $aluno->nome;

  return view('prova')->with('prova', $avaliacao);
}

}
