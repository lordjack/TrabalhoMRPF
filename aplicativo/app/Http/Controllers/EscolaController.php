<?php

namespace App\Http\Controllers;

use App\Escola;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    public function listar(){
      $escola = Escola::get();

      return view('escolas')->with('escolas',$escola);
    }

    public function cadastrar()
    {
      return view('escolaCadastrar');
    }



    public function salvar(Request $request, $id)
    {
      if ($id === 0){
      $escola = new Escola();
      $escola->nome = $request->input('nome');
      $escola->cidade_id = $request->input('cidade_id');
      $escola->rua = $request->input('rua');
      $escola->telefone = $request->input('telefone');
      $escola->bairro = $request->input('bairro');
      $escola->complemento = $request->input('complemento');
      $escola->cnpj = $request->input('cnpj');

      $escola->save();

      return redirect()->action('EscolaController@listar');
      }
    }
    public function editar($id)
    {
      $escola = Escola::find($id);

      return view('escolaEditar')->with('escolas',$escola);
    }

    public function deletar($id)
    {
      $escola = Escola::find($id);

      if (empty($escola)) {
        return '<h2>Houve um problema ao consultar o ID informado</h2>';
      }
      $escola->delete();

      return redirect()->action('EscolaController@listar');
    }

}
