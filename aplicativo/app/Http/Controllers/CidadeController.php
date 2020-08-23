<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
  public function listar(){
    $cidade = Cidade::get();

    return view('cidades')->with('cidades',$cidade);
  }
  public function cadastrar()
  {
    return view('cidadeCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $cidade = new Cidade();
    $cidade->nome = $request->input('nome');
    $cidade->uf = $request->input('uf');
    $cidade->cep = $request->input('cep');

    $cidade->save();

    return redirect()->action('CidadeController@listar');
    }
}
public function editar($id)
{
  $cidade = Cidade::find($id);

  return view('cidadeEditar')->with('cidades',$cidade);
}

public function deletar($id)
{
  $cidade = Cidade::find($id);

  if (empty($cidade)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $cidade->delete();

  return redirect()->action('CidadeController@listar');
}

}
