@extends('cadastrar')

@section('titulo', 'Cadastrar Cursos')

@section('form')

      <form class="" action="{{ action('CursoController@salvar', 0) }}" method="post">
        @csrf
      <label>Nome</label><br>
      <input type="text" name="nome"><br>
      <label>Data de inicio</label><br>
      <input type="text" name="data_inicio"><br>
      <label>Data de término</label><br>
      <input type="text" name="data_fim"><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>

@stop
