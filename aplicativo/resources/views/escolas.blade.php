@extends('layout')

@section('titulo', 'Escolas')


@section('cabecalho')
  <h2>Escolas Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Nome</th>
  <th>Cidade_id</th>
  <th>Telefone</th>
  <th>CNPJ</th>
  <th>Bairro</th>
  <th>Rua</th>
  <th>Complemento</th>
  <th>Ações</th>
</tr>

  @foreach($escolas as $item)
<tr>
    <td>{{$item->nome}}</td>
    <td>{{$item->cidade_id}}</td>
    <td>{{$item->telefone}}</td>
    <td>{{$item->cnpj}}</td>
    <td>{{$item->bairro}}</td>
    <td>{{$item->rua}}</td>
    <td>{{$item->complemento}}</td>
    <td>
      <a href="{{ action('EscolaController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('EscolaController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
