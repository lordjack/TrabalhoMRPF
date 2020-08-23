@extends('layout')

@section('titulo', 'Curso_disciplinas')


@section('cabecalho')
  <h2>Cursos_disciplinas Cadastrados:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Disciplina_Id</th>
  <th>Curso_Id</th>
  <th>Professor_Id</th>
  <th>Ações</th>
</tr>

  @foreach($cursos_disciplinas as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->disciplina_id}}</td>
    <td>{{$item->curso_Id}}</td>
    <td>{{$item->professor_Id}}</td>
    <td>
      <a href="{{ action('Curso_disciplinaController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('Curso_disciplinaController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
