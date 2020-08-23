@extends('layout')

@section('titulo', 'Questionários')


@section('cabecalho')
  <h2>Questionários Cadastrados:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Disciplina_Id</th>
  <th>Título</th>
  <th>Peso da Competência 1</th>
  <th>Peso da Competência 2</th>
  <th>Peso da Competência 3</th>
  <th>Ações</th>
</tr>

  @foreach($questionarios as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->disciplina_id}}</td>
    <td>{{$item->titulo}}</td>
    <td>{{$item->peso_competencia1}}</td>
    <td>{{$item->peso_competencia2}}</td>
    <td>{{$item->peso_competencia3}}</td>
    <td>
      <a href="{{ action('QuestionarioController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('QuestionarioController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
