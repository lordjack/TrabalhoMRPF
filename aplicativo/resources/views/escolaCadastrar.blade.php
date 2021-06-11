@extends('cadastrar')

@section('titulo', 'Cadastrar Escolas')

@section('form')
<form class="form-group" action="{{ action('EscolaController@salvar', 0) }}" method="post">
    @csrf
    <label>Nome</label><br>
    <input class="col-sm-3 form-control" type="text" name="nome" required><br>
    <label>Cep</label><br>
    <input class="col-sm-3 form-control" type="text" name="cep" required><br>
    <label>Email</label><br>
    <input class="col-sm-3 form-control" type="email" name="email" required><br>
    <label>Telefone</label><br>
    <input class="col-sm-3 form-control" type="text" name="telefone" required><br>
    <label>Rua</label><br>
    <input class="col-sm-3 form-control" type="text" name="rua" required><br>
    <label>Numero</label><br>
    <input class="col-sm-3 form-control" type="text" name="numero" required><br>
    <label>Cnpj</label><br>
    <input class="col-sm-3 form-control" type="text" name="cnpj" required><br>
    <label>Sigla</label><br>
    <input class="col-sm-3 form-control" type="text" name="sigla" required><br>
    <label>Cidade_id</label><br>
    <input class="col-sm-3 form-control" type="text" name="cidade_id" required><br>
    <label>Bairro</label><br>
    <input class="col-sm-3 form-control" type="text" name="bairro" required><br>
    <label>Tipo</label><br>
    <select class="col-sm-3 form-control" name="tipo">
        <option value="Municipal">Municipal</option>
        <option value="Estadual">Estadual</option>
        <option value="Federal">Federal</option>
    </select>
    <br>
    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
    <a class="btn btn-primary" href="{{ url()->previous()}}"><i class="fas fa-arrow-left"></i> Voltar</a>
</form>



@stop
