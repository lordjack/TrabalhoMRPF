@extends('cadastrar')

@section('titulo', 'Cadastrar Alunos')

@section('form')
    <form class="" action="{{ action('AlunoController@salvar', 0) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input type="text" name="nome"><br>
      <label>Número</label><br>
      <input type="text" name="numero"><br>
      <label>Matrícula</label><br>
      <input type="text" name="matricula"><br>
      <label>Email</label><br>
      <input type="text" name="email"><br>
      <label>Contato</label><br>
      <input type="text" name="contato"><br>
      <label>Contato dos Responsáveis</label><br>
      <input type="text" name="contato_responsaveis"><br>
      <label>Turma</label><br>
      <input type="text" name="turma_id"><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>

@stop
