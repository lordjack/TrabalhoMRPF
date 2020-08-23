<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
  public function listar(){
    $pessoa = Pessoa::get();

    return view('pessoas')->with('pessoas',$pessoa);
  }
  public function cadastrar()
  {
    return view('pessoaCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $pessoa = new Pessoa();
    $pessoa->nome = $request->input('nome');
    $pessoa->email = $request->input('email');
    $pessoa->cpf = $request->input('cpf');
    $pessoa->celular1 = $request->input('celular1');
    $pessoa->celular2 = $request->input('celular2');
    $pessoa->celular3 = $request->input('celular3');

    $pessoa->save();

    return redirect()->action('PessoaController@listar');
    }
}
public function editar($id)
{
  $pessoa = Pessoa::find($id);

  return view('pessoaEditar')->with('pessoas',$pessoa);
}

public function deletar($id)
{
  $pessoa = Pessoa::find($id);

  if (empty($pessoa)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $pessoa->delete();

  return redirect()->action('PessoaController@listar');
}
}
