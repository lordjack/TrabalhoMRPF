@extends('cadastrar')

@section('titulo', 'Cadastrar Professores')

@section('form')

    <form class="" action="{{ action('ProfessorController@salvar', $professores->id) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input type="text" name="nome" value="{{$professores->nome}}"><br>
      <label>Email</label><br>
      <input type="text" name="email" value="{{$professores->email}}"><br>
      <label>Contato</label><br>
      <input type="text" name="contato" value="{{$professores->contato}}"><br>
      <label>Área</label><br>
      <input type="text" name="area" value="{{$professores->area}}"><br>
      <label>Titulação</label><br>
      <input type="text" name="titulacao" value="{{$professores->titulacao}}"><br>
      <label>Formação</label><br>
      <input type="text" name="formacao" value="{{$professores->formacao}}"><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>


@stop
