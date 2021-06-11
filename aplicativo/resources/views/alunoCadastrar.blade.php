@extends('cadastrar')

@section('titulo', 'Cadastrar Alunos')

@section('form')
<h3 class="h3">Cadastrar</h3><br>
<form class="form-group" action="{{ action('AlunoController@salvar', 0) }}" method="post">
    @csrf
    <label>Nome</label><br>
    <input class="col-sm-3 form-control" type="text" name="nome" required><br>
    <label>Número</label><br>
    <input class="col-sm-3 form-control" type="text" name="numero" required><br>
    <label>Matrícula</label><br>
    <input class="col-sm-3 form-control" type="text" name="matricula" required><br>
    <label>Email</label><br>
    <input class="col-sm-3 form-control" type="email" name="email" required><br>
    <label>Contato</label><br>
    <input class="col-sm-3 form-control" type="text" name="contato" required><br>
    <label>Contato dos Responsáveis</label><br>
    <input class="col-sm-3 form-control" type="text" name="contato_responsaveis" required><br>
    <input type="hidden" name="turma_id" value="{{$turma}}"><br>
    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
    <a class="btn btn-primary" href="{{ url()->previous()}}"><i class="fas fa-arrow-left"></i> Voltar</a>

</form>

@stop
