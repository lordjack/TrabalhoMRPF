@extends('cadastrar')

@section('titulo', 'Cadastrar Alunos')

@section('form')
    <form class="" action="{{ action('AlunoController@salvar', $alunos->id) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input type="text" name="nome" value="{{$alunos->nome}}"><br>
      <label>Número</label><br>
      <input type="text" name="numero" value="{{$alunos->numero}}"><br>
      <label>Matrícula</label><br>
      <input type="text" name="matricula" value="{{$alunos->matricula}}"><br>
      <label>Email</label><br>
      <input type="text" name="email" value="{{$alunos->email}}"><br>
      <label>Contato</label><br>
      <input type="text" name="contato" value="{{$alunos->contato}}"><br>
      <label>Contato dos Responsáveis</label><br>
      <input type="text" name="contato_responsaveis" value="{{$alunos->contato_responsaveis}}"><br>
      <label>Turma</label><br>
      <input type="text" name="turma_id" value="{{$alunos->turma_id}}"><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>

@stop
