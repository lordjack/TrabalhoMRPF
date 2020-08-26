@extends('layout')

@section('titulo', 'Turmas')


@section('cabecalho')
  <h2>Turmas Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Curso</th>
  <th>Nome</th>
  <th>Turno</th>
  <th>Série</th>
  <th>Ações</th>
</tr>

  @foreach($turmas as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->curso}}</td>
    <td>{{$item->nome}}</td>
    <td>{{$item->turno}}</td>
    <td>{{$item->serie}}</td>
    <td>
      <a href="{{ action('TurmaController@editar', $item->id) }}">Editar</a><br>
      <a href="{{ action('TurmaController@deletar', $item->id) }}">Excluir</a><br>
      <a href="{{ url('alunos')}}">Detalhes da turma</a>
    </td>
</tr>
  @endforeach

</table>
@stop
