@extends('cadastrar')

@section('titulo', 'Cadastrar Professores')

@section('form')

    <form class="" action="{{ action('ProfessorController@salvar', 0) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input type="text" name="nome"><br>
      <label>Email</label><br>
      <input type="text" name="email"><br>
      <label>Contato</label><br>
      <input type="text" name="contato"><br>
      <label>Área</label><br>
      <input type="text" name="area"><br>
      <label>Titulação</label><br>
      <input type="text" name="titulacao"><br>
      <label>Formação</label><br>
      <input type="text" name="formacao"><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>


@stop
