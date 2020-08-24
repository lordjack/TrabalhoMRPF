<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Pessoa;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
  public function listar(){

    $aluno = Aluno::get();

    foreach ($aluno as $item) {

      $pessoa = Pessoa::find($item->pessoa_id);

      $item->nome = $pessoa->nome;
      $item->email = $pessoa->email;
      $item->cpf =$pessoa->cpf;
      $item->celular1 = $pessoa->celular1;
      $item->celular2 = $pessoa->celular2;
      $item->celular3 = $pessoa->celular3;
    }

    return view('alunos')->with('alunos',$aluno);
  }


  public function cadastrar()
  {
    return view('alunoCadastrar');
  }

  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $aluno = new Aluno();
    $aluno->pessoa_id = $request->input('pessoa_id');

    $aluno->save();

    return redirect()->action('AlunoController@listar');
    }
}
public function editar($id)
{
  $aluno = Aluno::find($id);

  return view('alunoEditar')->with('alunos',$aluno);
}

public function deletar($id)
{
  $aluno = Aluno::find($id);

  if (empty($aluno)) {
    return '<h2>Houve um problema ao consultar o ID informado</h2>';
  }
  $aluno->delete();

  return redirect()->action('AlunoController@listar');
}

}
