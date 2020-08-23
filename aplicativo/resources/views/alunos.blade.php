@extends('layout')

@section('titulo', 'Alunos')


@section('cabecalho')
  <h2>Alunos Cadastrados:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Pessoa_Id</th>
  <th>Ações</th>
</tr>

  @foreach($alunos as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->pessoa_id}}</td>
    <td>
      <a href="{{ action('AlunoController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('AlunoController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
