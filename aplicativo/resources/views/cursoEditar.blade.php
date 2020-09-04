@extends('cadastrar')

@section('titulo', 'Cadastrar Cursos')

@section('form')

      <form class="" action="{{ action('CursoController@salvar', $cursos->id) }}" method="post">
        @csrf
      <label>Nome</label><br>
      <input type="text" name="nome" value="{{$cursos->nome}}"><br>

      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>

@stop
