@extends('layout')

@section('titulo', 'Alunos')


@section('cabecalho')
  <h2>Alunos Cadastrados:</h2>
@stop


@section('listagem')

<table class='table'>
<tr>
  <th>Id</th>
  <th>Nome</th>
  <th>Número</th>
  <th>Matrícula</th>
  <th>Turma</th>
  <th>Email</th>
  <th>Contato</th>
  <th>Contato dos Responsáveis</th>
  <th>Ações</th>
</tr>

  @foreach($alunos as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->nome}}</td>
    <td>{{$item->numero}}</td>
    <td>{{$item->matricula}}</td>
    <td>{{$item->turma}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->contato}}</td>
    <td>{{$item->contato_responsaveis}}</td>
    <td>
      <a href="{{ action('AlunoController@editar', $item->id) }}">Editar</a>
      <a href="{{ action('AlunoController@deletar', $item->id) }}">Excluir</a>
      <a href="{{ action('AvaliacaoController@cadastrar', $item->id) }}">Avaliar Aluno</a>
    </td>
</tr>
  @endforeach

</table>
@stop
