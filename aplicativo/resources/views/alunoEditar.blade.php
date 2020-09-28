@extends('cadastrar')

@section('titulo', 'Cadastrar Alunos')

@section('form')
    <form class="" action="{{ action('AlunoController@salvar', $alunos->id) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input class="form-control" type="text" name="nome" value="{{$alunos->nome}}"><br>
      <label>Número</label><br>
      <input class="form-control" type="text" name="numero" value="{{$alunos->numero}}"><br>
      <label>Matrícula</label><br>
      <input class="form-control" type="text" name="matricula" value="{{$alunos->matricula}}"><br>
      <label>Email</label><br>
      <input class="form-control" type="email" name="email" value="{{$alunos->email}}"><br>
      <label>Contato</label><br>
      <input class="form-control" type="text" name="contato" value="{{$alunos->contato}}"><br>
      <label>Contato dos Responsáveis</label><br>
      <input class="form-control" type="text" name="contato_responsaveis" value="{{$alunos->contato_responsaveis}}"><br>
      <div class="form-group">
      <label>Turma</label><br>
      <select class="form-control" name="turma_id">
        @foreach($turmas as $item)
        <option value="{{$item->id}}"><?php echo $item->nome ?></option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Salvar">
    </div>
      </form>
      <a class="btn btn-primary" href="{{ url()->previous()}}">Voltar</a>
@stop
