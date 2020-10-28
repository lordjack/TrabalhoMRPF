@extends('layout')

@section('titulo', 'Turmas')


@section('cabecalho')
  <h3 class="h3">Turmas Cadastradas:</h3>
  <a class="btn btn-outline-primary" href="{{ action('TurmaController@cadastrar') }}">Cadastrar Turma</a>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Curso</th>
  <th>Nome</th>
  <th>Turno</th>
  <th>Série</th>
  <th>Ações</th>
</tr>

  @foreach($turmas as $item)
<tr>
    <td>{{$item->curso}}</td>
    <td>{{$item->nome}}</td>
    <td>{{$item->turno}}</td>
    <td>{{$item->serie}}</td>
    <td>
      <a class="btn btn-primary btn-sm" href="{{ action('TurmaController@editar', $item->id) }}">Editar</a>
      <a class="btn btn-primary btn-sm" onclick=" return confirm('Remover Turma?');" href="{{ action('TurmaController@deletar', $item->id) }}">Excluir</a>
      <a class="btn btn-primary btn-sm" href="{{ action('AlunoController@listar', $item->id) }}">Detalhes</a>
    </td>
</tr>
  @endforeach

</table>
@stop
