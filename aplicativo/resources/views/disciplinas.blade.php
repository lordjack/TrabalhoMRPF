@extends('layout')

@section('titulo', 'Disciplinas')


@section('cabecalho')
  <h2>Disciplinas Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Nome</th>
  <th>Carga Horária</th>
  <th>Ações</th>
</tr>

  @foreach($disciplinas as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->nome}}</td>
    <td>{{$item->carga_horaria}}</td>
    <td>
      <a href="{{ action('DisciplinaController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('DisciplinaController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
