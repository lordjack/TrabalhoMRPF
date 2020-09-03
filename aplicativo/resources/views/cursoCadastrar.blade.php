@extends('cadastrar')

@section('titulo', 'Cadastrar Cursos')

@section('form')
      <form class="form-group" action="{{ action('CursoController@salvar', 0) }}" method="post">
        @csrf
      <label>Nome</label><br>
      <input class="form-control" type="text" name="nome" required><br>
      <label>Data de inicio</label><br>
      <input class="form-control" type="date" name="data_inicio" required><br>
      <label>Data de término</label><br>
      <input class="form-control" type="date" name="data_fim" required><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>
      <a href="{{ url()->previous()}}">Voltar</a>
@stop
