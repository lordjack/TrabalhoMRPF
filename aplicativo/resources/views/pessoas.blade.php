@extends('layout')

@section('titulo', 'Pessoas')


@section('cabecalho')
  <h2>Pessoas Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Nome</th>
  <th>E-Mail</th>
  <th>CPF</th>
  <th>Contato1</th>
  <th>Contato2</th>
  <th>Contato3</th>
  <th>Ações</th>
</tr>

  @foreach($pessoas as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->nome}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->cpf}}</td>
    <td>{{$item->celular1}}</td>
    <td>{{$item->celular2}}</td>
    <td>{{$item->celular3}}</td>
    <td>
      <a href="{{ action('PessoaController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('PessoaController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
