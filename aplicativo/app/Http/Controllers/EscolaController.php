<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escola;

class EscolaController extends Controller
{
    public function listar()
    {
        $escola = Escola::get();

        return view('escola')->with('escola', $escola);
    }
    public function cadastrar()
    {
        return view('escolaCadastrar');
    }
    public function salvar(Request $request, $id)
    {
        if ($id == 0) {
            $escola = new Escola();
            $escola->nome = $request->input('nome');
            $escola->cep = $request->input('cep');
            $escola->telefone = $request->input('telefone');
            $escola->rua = $request->input('rua');
            $escola->numero = $request->input('numero');
            $escola->cnpj = $request->input('cnpj');
            $escola->email = $request->input('email');
            $escola->sigla = $request->input('sigla');
            $escola->cidade_id = $request->input('cnpj');
            $escola->bairro = $request->input('bairro');
            $escola->tipo = $request->input('tipo');

            // nome, cep, telefone, rua, numero, cnpj,
            //email, sigla, cidade_id, bairro, tipo([municipal, estadual, federal])

            $escola->save();

            return redirect()->action('EscolaController@listar');
        } else {
            $escola = Escola::find($id);
            $escola->nome = $request->input('nome');
            $escola->cep = $request->input('cep');
            $escola->telefone = $request->input('telefone');
            $escola->rua = $request->input('rua');
            $escola->numero = $request->input('numero');
            $escola->cnpj = $request->input('cnpj');
            $escola->email = $request->input('email');
            $escola->sigla = $request->input('sigla');
            $escola->cidade_id = $request->input('cidade_id');
            $escola->bairro = $request->input('bairro');
            $escola->tipo = $request->input('tipo');

            $escola->save();

            return redirect()->action('EscolaController@listar');
        }
    }
    public function editar($id)
    {
        $escola = Escola::find($id);

        return view('escolaEditar')->with('escola', $escola);
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
