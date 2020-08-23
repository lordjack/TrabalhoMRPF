@extends('layout')

@section('titulo', 'Matrículas')


@section('cabecalho')
  <h2>Matrículas Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Matrícula</th>
  <th>Curso_Id</th>
  <th>Turma_id</th>
  <th>Aluno_id</th>
  <th>Ações</th>
</tr>

  @foreach($matriculas as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->matricula}}</td>
    <td>{{$item->curso_Id}}</td>
    <td>{{$item->turma_id}}</td>
    <td>{{$item->aluno_id}}</td>
    <td>
      <a href="{{ action('MatriculaController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('MatriculaController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
