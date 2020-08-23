@extends('layout')

@section('titulo', 'Habilidades')


@section('cabecalho')
  <h2>Habilidades Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Id</th>
  <th>Nome</th>
  <th>Peso da Competencia</th>
  <th>Questionário_Id</th>
  <th>Ações</th>
</tr>

  @foreach($habilidades as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->nome}}</td>
    <td>{{$item->peso_competencia}}</td>
    <td>{{$item->questionario_id}}</td>
    <td>
      <a href="{{ action('HabilidadeController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('HabilidadeController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
