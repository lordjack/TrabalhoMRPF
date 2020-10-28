@extends('layout')

@section('titulo', 'Cursos')


@section('cabecalho')
  <h3>Cursos Cadastrados:</h3>
  <a class="btn btn-outline-primary" href="{{ action('CursoController@cadastrar') }}">Cadastrar Curso</a>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Nome</th>
  <th>Ações</th>
</tr>

  @foreach($cursos as $item)
<tr>
    <td>{{$item->nome}}</td>
    <td>
      <a class="btn btn-primary btn-sm" href="{{ action('CursoController@editar', $item->id) }}">Editar</a>
      <a class="btn btn-primary btn-sm" onclick=" return confirm('Remover curso?');" href="{{ action('CursoController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
