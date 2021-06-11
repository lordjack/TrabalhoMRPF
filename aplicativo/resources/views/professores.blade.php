@extends('layout')

@section('titulo', 'Professores')


@section('cabecalho')
<h3 class="h3">Listagem de Professores</h3><br>
<a class="btn btn-outline-primary" href="{{ action('ProfessorController@cadastrar') }}">Cadastrar</a>
@stop


@section('listagem')<br>
<table class='table'>
<<<<<<< HEAD
    <tr>
        <th>Nome</th>
        <th>E-Mail</th>
        <th>Contato</th>
        <th>Area</th>
        <th>Titulação</th>
        <th>Formação</th>
        <th>Ações</th>
    </tr>

    @foreach($professores as $item)
    <tr>
        <td>{{$item->nome}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->contato}}</td>
        <td>{{$item->area}}</td>
        <td>{{$item->titulacao}}</td>
        <td>{{$item->formacao}}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="{{ action('ProfessorController@editar', $item->id) }}">Editar</a>
            <a class="btn btn-primary btn-sm" onclick=" return confirm('Remover Professor?');" href="{{ action('ProfessorController@deletar', $item->id) }}">Excluir</a>
        </td>
    </tr>
    @endforeach
=======
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
>>>>>>> f641346a39de8261f39ecad3b013268931b54ec3

</table>
@stop
