@extends('cadastrar')

@section('titulo', 'Cadastrar Disciplina')

@section('form')
<h3 class="h3">Cadastrar Disciplina</h3><br>
    <form class="form-group" action="{{ action('DisciplinaController@salvar', 0) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input class="form-control" type="text" name="nome" required><br>
      <label>Turno</label><br>
      <select class="form-control" name="turno" value="turno" required>
        <option value="Matutino">Matutino</option>
        <option value="Vespertino">Vespertino</option>
        <option value="Noturno">Noturno</option>
        <option value="Integral">Integral</option>
    </select><br>
      <label>Carga Horaria</label><br>
      <input class="form-control" type="text" name="carga_hr" required><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>
      <a class="btn btn-primary" href="{{ url()->previous()}}">Voltar</a>


@stop
