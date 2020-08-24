@extends('layout')

@section('titulo', 'Avaliações')


@section('cabecalho')
  <h2>Avaliações Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Aluno_Id</th>
  <th>Questionario</th>
  <th>Data</th>
  <th>Ações</th>
</tr>

  @foreach($avaliacoes as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->aluno_id}}</td>
    <td>{{$item->questionario}}</td>
    <td>{{$item->data}}</td>
    <td>
      <a href="{{ action('AvaliacaoController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('AvaliacaoController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
