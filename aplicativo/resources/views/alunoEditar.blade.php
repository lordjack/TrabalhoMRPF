@extends('cadastrar')

@section('titulo', 'Cadastrar Alunos')

@section('form')
<h3 class="h3">Editar</h3><br>
<form class="" action="{{ action('AlunoController@salvar', $alunos->id) }}" method="post">
    @csrf
    <label>Nome</label><br>
    <input class="col-sm-3 form-control" type="text" name="nome" value="{{$alunos->nome}}"><br>
    <label>Número</label><br>
    <input class="col-sm-3 form-control" type="text" name="numero" value="{{$alunos->numero}}"><br>
    <label>Matrícula</label><br>
    <input class="col-sm-3 form-control" type="text" name="matricula" value="{{$alunos->matricula}}"><br>
    <label>Email</label><br>
    <input class="col-sm-3 form-control" type="email" name="email" value="{{$alunos->email}}"><br>
    <label>Contato</label><br>
    <input class="col-sm-3 form-control" type="text" name="contato" value="{{$alunos->contato}}"><br>
    <label>Contato dos Responsáveis</label><br>
    <input class="col-sm-3 form-control" type="text" name="contato_responsaveis" value="{{$alunos->contato_responsaveis}}"><br>
    <div class="form-group">
        <label>Turma</label><br>
        <select class="col-sm-3 form-control" name="turma_id">
            @foreach($turmas as $item)
            <option value="{{$item->id}}"><?php echo $item->nome ?></option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
        <a class="btn btn-primary" href="{{ url()->previous()}}"><i class="fas fa-arrow-left"></i> Voltar</a>
    </div>
</form>

@stop
