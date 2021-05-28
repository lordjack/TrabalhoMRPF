@extends('layout')

@section('titulo', 'Responsavel')


@section('cabecalho')
  <h3 class="h3">Responsáveis Cadastrados:</h3><br>
  <a class="btn btn-outline-primary" href="{{ action('ResponsavelAlunoController@cadastrar') }}">Cadastrar Responsavel</a>
@stop


@section('listagem')
<br>
<table class='table'>
<tr>
    <th>#</th>
  <th>Nome Do Responsável</th>
  <th>E-Mail</th>
  <th>Contato</th>
  <th>Responsável do Aluno</th>
  <th>Ações</th>
</tr>

  @foreach($responsavel as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->nome}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->contato}}</td>
    <td>{{$item->alunos}}</td>
    <td>
      <a class="btn btn-primary btn-sm" href="{{ action('ResponsavelAlunoController@editar', $item->id) }}">Editar</a>
      <a class="btn btn-primary btn-sm" onclick=" return confirm('Remover Responsavel?');" href="{{ action('ResponsavelAlunoController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
