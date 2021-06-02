@extends('cadastrar')

@section('titulo', 'Cadastrar Responsável')

@section('form')
<h3 class="h3">Edite o Responsável</h3><br>
    <form class="form-group" action="{{ action('ResponsavelAlunoController@salvar', $responsavel->id) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input class="form-control" type="text" name="nome" value="{{$responsavel->nome}}"><br>
      <label>Email</label><br>
      <input class="form-control" type="email" name="email" value="{{$responsavel->email}}"><br>
      <label>Contato</label><br>
      <input class="form-control" type="text" name="contato" value="{{$responsavel->contato}}"><br>
      <label>Responsável do Aluno</label><br>
      <select class="form-control" name="resp_id">
        @foreach($alunos as $item)
        <option value="{{$item->id}}"><?php echo $item->nome ?></option>
        @endforeach
      </select><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>
      <a class="btn btn-primary" href="{{ url()->previous()}}">Voltar</a>

@stop
