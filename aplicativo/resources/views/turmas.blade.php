@extends('layout')

@section('titulo', 'Turmas')


@section('cabecalho')
  <h2>Turmas Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Curso_Id</th>
  <th>Nome</th>
  <th>Turno</th>
  <th>Série</th>
  <th>Ações</th>
</tr>

  @foreach($turmas as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->curso_id}}</td>
    <td>{{$item->nome}}</td>
    <td>{{$item->turno}}</td>
    <td>{{$item->serie}}</td>
    <td>
      <a href="{{ action('TurmaController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('TurmaController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
