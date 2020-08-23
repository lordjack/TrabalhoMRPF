@extends('layout')

@section('titulo', 'Cidades')


@section('cabecalho')
  <h2>Cidades Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Nome</th>
  <th>UF</th>
  <th>CEP</th>
  <th>Ações</th>
</tr>

  @foreach($cidades as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->nome}}</td>
    <td>{{$item->uf}}</td>
    <td>{{$item->cep}}</td>
    <td>
      <a href="{{ action('CidadesController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('CidadesController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
