@extends('cadastrar')

@section('titulo', 'Cadastrar Cursos')

@section('form')
<h3 class="h3">Cadastrar Cursos</h3><br>
      <form class="form-group" action="{{ action('CursoController@salvar', 0) }}" method="post">
        @csrf
      <label>Nome</label><br>
      <input class="form-control" type="text" name="nome" required><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>
      <a class="btn btn-primary" href="{{ url()->previous()}}">Voltar</a>
@stop
