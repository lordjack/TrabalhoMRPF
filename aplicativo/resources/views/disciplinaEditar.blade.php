@extends('cadastrar')

@section('titulo', 'Cadastrar Disciplina')

@section('form')
<h3 class="h3">Editar Disciplina</h3><br>
    <form class="form-group" action="{{ action('DisciplinaController@salvar', $disciplina->id) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input class="form-control" type="text" name="nome" value="{{$disciplina->nome}}"><br>
      <label>Turno</label><br>
      <input class="form-control" type="email" name="turno" value="{{$disciplina->turno}}"><br>
      <label>Carga Horaria</label><br>
      <input class="form-control" type="text" name="carga_hr" value="{{$disciplina->carga_hr}}"><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>
      <a class="btn btn-primary" href="{{ url()->previous()}}">Voltar</a>

@stop
