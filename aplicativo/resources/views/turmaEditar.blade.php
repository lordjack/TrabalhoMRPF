@extends('cadastrar')

@section('titulo', 'Cadastrar Turmas')

@section('form')
    <form class="" action="{{ action('TurmaController@salvar', $turmas->id) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input type="text" name="nome" value="{{turmas->nome}}"><br>
      <label>Curso</label><br>
      <input type="text" name="curso_id" value="{{turmas->curso_id}}"><br>
      <label>Turno</label><br>
      <input type="text" name="turno" value="{{turmas->turno}}"><br>
      <label>Série</label><br>
      <input type="text" name="serie" value="{{turmas->serie}}"><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>

@stop
