<?php

namespace App\Http\Controllers;

use App\Questionario;
use Illuminate\Http\Request;

class QuestionarioController extends Controller
{
  public function listar(){
    $questionario = Questionario::get();

    return view('questionarios')->with('questionarios',$questionario);
  }
  public function cadastrar()
  {
    return view('questionarioCadastrar');
  }
  public function salvar(Request $request, $id)
  {
    if ($id === 0){
    $questionario = new Questionario();
    $questionario->disciplina_id = $request->input('disciplina_id');
    $questionario->titulo = $request->input('titulo');
    $questionario->peso_competencia1 = $request->input('peso_competencia1');
    $questionario->peso_competencia2 = $request->input('peso_competencia2');
    $questionario->peso_competencia3 = $request->input('peso_competencia3');

    $questionario->save();

    return redirect()->action('QuestionarioController@listar');
    }
  }
  public function editar($id)
  {
    $questionario = Questionario::find($id);

    return view('questionarioEditar')->with('questionarios',$questionario);
  }

  public function deletar($id)
  {
    $questionario = Questionario::find($id);

    if (empty($questionario)) {
      return '<h2>Houve um problema ao consultar o ID informado</h2>';
    }
    $questionario->delete();

    return redirect()->action('QuestionarioController@listar');
  }
}
