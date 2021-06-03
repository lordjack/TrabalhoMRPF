@extends('layout')

@section('titulo', 'Professores')


@section('cabecalho')
  <h3 class="h3">Professores Cadastrados</h3><br>
  <a class="btn btn-outline-primary" href="{{ action('ProfessorController@cadastrar') }}">Cadastrar Professor</a>
@stop


@section('listagem')<br>
<table class='table'>
<tr>
  <th>Nome</th>
  <th>E-Mail</th>
  <th>Contato</th>
  <th>Disciplina</th>
  <th>Titulação</th>
  <th>Formação</th>
  <th>Ações</th>
</tr>

  @foreach($professores as $item)
<tr>
    <td>{{$item->nome}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->contato}}</td>
    <td>{{$item->disciplina->name}}</td>
    <td>{{$item->titulacao}}</td>
    <td>{{$item->formacao}}</td>
    <td>
      <a class="btn btn-primary btn-sm" href="{{ action('ProfessorController@editar', $item->id) }}">Editar</a>
      <a class="btn btn-primary btn-sm" onclick=" return confirm('Remover Professor?');" href="{{ action('ProfessorController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
