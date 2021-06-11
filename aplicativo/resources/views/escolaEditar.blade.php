@extends('cadastrar')

@section('titulo', 'Cadastrar Escolas')

@section('form')
<form class="form-group" action="{{ action('EscolaController@salvar', $escola->id) }}" method="post">
    @csrf
    <label>Nome</label><br>
    <input class="col-sm-3 form-control" type="text" name="nome" value="{{$escola->nome}}" required><br>
    <label>Cep</label><br>
    <input class="col-sm-3 form-control" type="text" name="cep" value="{{$escola->cep}}" required><br>
    <label>Email</label><br>
    <input class="col-sm-3 form-control" type="email" name="email" value="{{$escola->email}}" required><br>
    <label>Telefone</label><br>
    <input class="col-sm-3 form-control" type="text" name="telefone" value="{{$escola->telefone}}" required><br>
    <label>Rua</label><br>
    <input class="col-sm-3 form-control" type="text" name="rua" value="{{$escola->rua}}" required><br>
    <label>Numero</label><br>
    <input class="col-sm-3 form-control" type="text" name="numero" value="{{$escola->numero}}" required><br>
    <label>Cnpj</label><br>
    <input class="col-sm-3 form-control" type="text" name="cnpj" value="{{$escola->cnpj}}" required><br>
    <label>Sigla</label><br>
    <input class="col-sm-3 form-control" type="text" name="sigla" value="{{$escola->sigla}}" required><br>
    <label>Cidade_id</label><br>
    <input class="col-sm-3 form-control" type="text" name="cidade_id" value="{{$escola->cidade_id}}" required><br>
    <label>Bairro</label><br>
    <input class="col-sm-3 form-control" type="text" name="bairro" value="{{$escola->bairro}}" required><br>
    <label>Tipo</label><br>
    <select class="col-sm-3 form-control" name="tipo">
        <option <?php echo $escola->tipo === 'Municipal' ? 'selected' : ''; ?> value="Municipal">Municipal</option>
        <option <?php echo $escola->tipo === 'Estadual' ? 'selected' : ''; ?> value="Estadual">Estadual</option>
        <option <?php echo $escola->tipo === 'Federal' ? 'selected' : ''; ?> value="Federal">Federal</option>
    </select>
    <br>
    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
    <a class="btn btn-primary" href="{{ url()->previous()}}"><i class="fas fa-arrow-left"></i> Voltar</a>
</form>



@stop
