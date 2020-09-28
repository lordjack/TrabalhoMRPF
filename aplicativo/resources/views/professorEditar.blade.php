@extends('cadastrar')

@section('titulo', 'Cadastrar Professores')

@section('form')

    <form class="form-group" action="{{ action('ProfessorController@salvar', $professores->id) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input class="form-control" type="text" name="nome" value="{{$professores->nome}}"><br>
      <label>Email</label><br>
      <input class="form-control" type="email" name="email" value="{{$professores->email}}"><br>
      <label>Contato</label><br>
      <input class="form-control" type="text" name="contato" value="{{$professores->contato}}"><br>
      <label>Área</label><br>
      <input class="form-control" type="text" name="area" value="{{$professores->area}}"><br>
      <label>Titulação</label><br>
      <input class="form-control" type="text" name="titulacao" value="{{$professores->titulacao}}"><br>
      <label>Formação</label><br>
      <input class="form-control" type="text" name="formacao" value="{{$professores->formacao}}"><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>
      <a class="btn btn-primary" href="{{ url()->previous()}}">Voltar</a>

@stop
