<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;

class DisciplinaController extends Controller
{
    public function listar(){
        $disciplina = Disciplina::get();

        return view('disciplina')->with('disciplina',$disciplina);
      }
      public function cadastrar()
      {

        return view('disciplinaCadastrar');
      }
      public function salvar(Request $request, $id)
      {
        if ($id == 0){
        $disciplina = new Disciplina();
        $disciplina->nome = $request->input('nome');
        $disciplina->turno = $request->input('turno');
        $disciplina->carga_hr = $request->input('carga_hr');




        $disciplina->save();

        return redirect()->action('DisciplinaController@listar');
      }else {
        $disciplina = Disciplina::find($id);
        $disciplina->nome = $request->input('nome');
        $disciplina->turno = $request->input('turno');
        $disciplina->carga_hr = $request->input('carga_hr');


        $disciplina->save();

        return redirect()->action('DisciplinaController@listar');
      }
    }
    public function editar($id)
    {
      $disciplina = Disciplina::find($id);


      return view('disciplinaEditar');
    }

    public function deletar($id)
    {
      $disciplina = Disciplina::find($id);

      if (empty($disciplina)) {
        return '<h2>Houve um problema ao consultar o ID informado</h2>';
      }
      $disciplina->delete();

      return redirect()->action('DisciplinaController@listar');
    }
}