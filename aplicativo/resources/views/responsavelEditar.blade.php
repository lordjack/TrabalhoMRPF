@extends('cadastrar')

@section('titulo', 'Cadastrar Responsável')

@section('form')
<h3 class="h3">Editar</h3><br>
<form class="form-group" action="{{ action('ResponsavelAlunoController@salvar', $responsavel->id) }}" method="post">
    @csrf
    <label>Nome</label><br>
    <input class="col-sm-3 form-control" type="text" name="nome" value="{{$responsavel->nome}}"><br>
    <label>Email</label><br>
    <input class="col-sm-3 form-control" type="email" name="email" value="{{$responsavel->email}}"><br>
    <label>Contato</label><br>
    <input class="col-sm-3 form-control" type="text" name="contato" value="{{$responsavel->contato}}"><br>
    <label>Responsável do Aluno</label><br>
    <select class="col-sm-3 form-control" name="resp_id">
        @foreach($alunos as $item)
        <option value="{{$item->id}}"><?php echo $item->nome ?></option>
        @endforeach
    </select><br>
    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
    <a class="btn btn-primary" href="{{ url()->previous()}}"><i class="fas fa-arrow-left"></i> Voltar</a>
</form>


@stop
