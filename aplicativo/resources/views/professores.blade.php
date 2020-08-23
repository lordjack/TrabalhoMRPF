@extends('layout')

@section('titulo', 'Professores')


@section('cabecalho')
  <h2>Professores Cadastrados:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Pessoa_Id</th>
  <th>Area</th>
  <th>Titulação</th>
  <th>Formação</th>
  <th>Ações</th>
</tr>

  @foreach($professores as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->pessoa_id}}</td>
    <td>{{$item->area}}</td>
    <td>{{$item->titulacao}}</td>
    <td>{{$item->formacao}}</td>
    <td>
      <a href="{{ action('ProfessorController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('ProfessorController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
