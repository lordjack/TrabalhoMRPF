@extends('cadastrar')

@section('titulo', 'Cadastrar Professores')

@section('form')
    <form class="form-group" action="{{ action('ProfessorController@salvar', 0) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input class="form-control" type="text" name="nome" required><br>
      <label>Email</label><br>
      <input class="form-control" type="email" name="email" required><br>
      <label>Contato</label><br>
      <input class="form-control" type="text" name="contato" required><br>
      <label>Área</label><br>
      <input class="form-control" type="text" name="area" required><br>
      <label>Titulação</label><br>
      <input class="form-control" type="text" name="titulacao" required><br>
      <label>Formação</label><br>
      <input class="form-control" type="text" name="formacao" required><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>
      <a class="btn btn-primary" href="{{ url()->previous()}}">Voltar</a>


@stop
