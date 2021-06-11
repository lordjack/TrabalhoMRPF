@extends('cadastrar')

@section('titulo', 'Cadastrar Professores')

@section('form')
<h3 class="h3">Cadastrar</h3><br>
<form class="form-group" action="{{ action('ProfessorController@salvar', 0) }}" method="post">
    @csrf
    <label>Nome</label><br>
    <input class="col-sm-3 form-control" type="text" name="nome" required><br>
    <label>Email</label><br>
    <input class="col-sm-3 form-control" type="email" name="email" required><br>
    <label>Contato</label><br>
    <input class="col-sm-3 form-control" type="text" name="contato" required><br>
    <label>Área</label><br>
    <input class="col-sm-3 form-control" type="text" name="area" required><br>
    <label>Titulação</label><br>
    <input class="col-sm-3 form-control" type="text" name="titulacao" required><br>
    <label>Formação</label><br>
    <input class="col-sm-3 form-control" type="text" name="formacao" required><br>
    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
    <a class="btn btn-primary" href="{{ url()->previous()}}"><i class="fas fa-arrow-left"></i> Voltar</a>
</form>



@stop
