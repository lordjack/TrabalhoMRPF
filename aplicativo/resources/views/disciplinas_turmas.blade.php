@extends('layout')

@section('titulo', 'Disciplinas_Turmas')


@section('cabecalho')
  <h2>Disciplinas_Turmas Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Disciplina_Id</th>
  <th>Turma_Id</th>
  <th>Ações</th>
</tr>

  @foreach($disciplinas_turmas as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->disciplina_id}}</td>
    <td>{{$item->turma_id}}</td>
    <td>
      <a href="{{ action('Disciplina_turmaController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('Disciplina_tUrmaController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
