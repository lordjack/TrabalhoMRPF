@extends('cadastrar')

@section('titulo', 'Cadastrar Cursos')

@section('form')
<h3 class="h3">Cadastrar</h3><br>
<form class="form-group" action="{{ action('CursoController@salvar', 0) }}" method="post">
    @csrf
    <label>Nome</label><br>
    <input class="col-sm-3 form-control" type="text" name="nome" required><br>
    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
    <a class="btn btn-primary" href="{{ url()->previous()}}"><i class="fas fa-arrow-left"></i> Voltar</a>
</form>

@stop
