@extends('cadastrar')

@section('titulo', 'Cadastrar Turmas')

@section('form')
<h3 class="h3">Cadastrar</h3><br>
<form class="form-group" action="{{ action('TurmaController@salvar', 0) }}" method="post">
    @csrf
    <label>Nome</label><br>
    <input class="col-sm-3 form-control" type="text" name="nome" required><br>
    <label>Curso</label><br>
    <select class="col-sm-3 form-control" name="curso_id">
        @foreach($cursos as $item)
        <option value="{{$item->id}}"><?php echo $item->nome ?></option>
        @endforeach
    </select><br>
    <label>Turno</label><br>
    <input class="col-sm-3 form-control" type="text" name="turno" required><br>
    <label>Série</label><br>
    <input class="col-sm-3 form-control" type="text" name="serie" required><br>


    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
    <a class="btn btn-primary" href="{{ url()->previous()}}"><i class="fas fa-arrow-left"></i> Voltar</a>
</form>

@stop
