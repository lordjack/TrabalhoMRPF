@extends('layout')

@section('titulo', 'Avaliações')


@section('cabecalho')
  <h2>Avaliações Cadastradas:</h2>
@stop


@section('listagem')

<table class='table'>
<tr>
  <th>ID</th>
  <th>Aluno_id</th>
  <th>Data</th>
  <th>Nota Competencia 1</th>
  <th>Nota Compentecia 2</th>
  <th>Nota competencia 3</th>
  <th>Nota Final</th>
  <th>Ações</th>
</tr>

  @foreach($avaliacoes as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->aluno_id}}</td>
    <td>{{$item->data}}</td>
    <td>{{$item->competencia1}}</td>
    <td>{{$item->competencia2}}</td>
    <td>{{$item->competencia3}}</td>
    <td>{{$item->nota_final}}</td>

    <td>
      <a href="{{ action('AvaliacaoController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('AvaliacaoController@deletar', $item->id) }}">Excluir</a>

    </td>
</tr>
  @endforeach

</table>
@stop
