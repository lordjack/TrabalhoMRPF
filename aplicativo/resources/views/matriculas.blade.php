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
  <th>Curso</th>
  <th>Turma</th>
  <th>Aluno_Id</th>
  <th>Ações</th>
</tr>

  @foreach($matriculas as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->matricula}}</td>
    <td>{{$item->curso}}</td>
    <td>{{$item->turma}}</td>
    <td>{{$item->aluno_id}}</td>
    <td>
      <a href="{{ action('MatriculaController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('MatriculaController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
