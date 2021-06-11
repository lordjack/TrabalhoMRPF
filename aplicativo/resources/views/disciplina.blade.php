@extends('layout')

@section('titulo', 'Responsavel')


@section('cabecalho')
  <h3 class="h3">Disciplinas Cadastradas</h3><br>
  <a class="btn btn-outline-primary" href="{{ action('DisciplinaController@cadastrar') }}">Cadastrar Disciplina</a>
@stop


@section('listagem')
<br>
<table class='table'>
<tr>
  <th>Nome</th>
  <th>Turno</th>
  <th>Carga Horaria</th>
  <th>Açõe</th>
</tr>

  @foreach($disciplina as $item)
<tr>
    <td>{{$item->nome}}</td>
    <td>{{$item->turno}}</td>
    <td>{{$item->carga_hr}}</td>
    <td>
      <a class="btn btn-primary btn-sm" href="{{ action('DisciplinaController@editar', $item->id) }}">Editar</a>
      <a class="btn btn-primary btn-sm" onclick=" return confirm('Remover Disciplina?');" href="{{ action('DisciplinaController@deletar', $item->id) }}">Excluir</a>
    </td>
</tr>
  @endforeach

</table>
@stop
