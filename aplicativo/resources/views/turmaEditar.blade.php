@extends('cadastrar')

@section('titulo', 'Cadastrar Turmas')

@section('form')
    <form class="form-group" action="{{ action('TurmaController@salvar', $turmas->id) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input class="form-control" type="text" name="nome" value="{{$turmas->nome}}"><br>
      <label>Curso</label><br>
      <select class="form-control" name="curso_id">
        @foreach($cursos as $item)
        <option value="{{$item->id}}"><?php echo $item->nome ?></option>
        @endforeach
      </select><br>
      <label>Turno</label><br>
      <input class="form-control" type="text" name="turno" value="{{$turmas->turno}}"><br>
      <label>Série</label><br>
      <input class="form-control" type="text" name="serie" value="{{$turmas->serie}}"><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>
      <a class="btn btn-primary" href="{{ url()->previous()}}">Voltar</a>
@stop
