<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Responsavel;
use Illuminate\Http\Request;

class ResponsavelAlunoController extends Controller
{
    public function listar(){
        $responsavel = Responsavel::get();

        return view('responsavel')->with('responsavel',$responsavel);
      }
      public function cadastrar()
      {

        $alunos = Aluno::get();

        return view('responsavelCadastrar')->with('alunos',$alunos);;
      }
      public function salvar(Request $request, $id)
      {
        if ($id == 0){
        $responsavel = new Responsavel();
        $responsavel->nome = $request->input('nome');
        $responsavel->email = $request->input('email');
        $responsavel->contato = $request->input('contato');
        $responsavel->resp_id = $request->input('resp_id');


        $responsavel->save();

        return redirect()->action('ResponsavelAlunoController@listar');
      }else {
        $responsavel = Responsavel::find($id);
        $responsavel->nome = $request->input('nome');
        $responsavel->email = $request->input('email');
        $responsavel->contato = $request->input('contato');
        $responsavel->resp_id = $request->input('resp_id');



        $responsavel->save();

        return redirect()->action('ResponsavelAlunoController@listar');
      }
    }
    public function editar($id)
    {
      $responsavel = Responsavel::find($id);
      $alunos = Aluno::get();


      return view('responsavelEditar')->with('responsavel', $responsavel)->with('alunos', $alunos);
    }

    public function deletar($id)
    {
      $responsavel = Responsavel::find($id);

      if (empty($responsavel)) {
        return '<h2>Houve um problema ao consultar o ID informado</h2>';
      }
      $responsavel->delete();

      return redirect()->action('ResponsavelAlunoController@listar');
    }
}