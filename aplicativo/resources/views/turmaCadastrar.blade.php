@extends('cadastrar')

@section('titulo', 'Cadastrar Turmas')

@section('form')
    <form class="" action="{{ action('TurmaController@salvar', 0) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input type="text" name="nome"><br>
      <label>Curso</label><br>
      <input type="text" name="curso_id"><br>
      <label>Turno</label><br>
      <input type="text" name="turno"><br>
      <label>Série</label><br>
      <input type="text" name="serie"><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>

@stop
