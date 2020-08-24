@extends('layout')

@section('titulo', 'Alunos')


@section('cabecalho')
  <h2>Alunos Cadastrados:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Nome</th>
  <th>Email</th>
  <th>CPF</th>
  <th>Contato 1</th>
  <th>Contato 2</th>
  <th>Contato 3</th>
  <th>Ações</th>
</tr>

  @foreach($alunos as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->nome}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->cpf}}</td>
    <td>{{$item->celular1}}</td>
    <td>{{$item->celular2}}</td>
    <td>{{$item->celular3}}</td>
    <td>
      <a href="{{ action('AlunoController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('AlunoController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
