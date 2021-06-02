@extends('cadastrar')

@section('titulo', 'Cadastrar Professores')

@section('form')
<h3 class="h3">Editar Professor</h3><br>

    <form class="form-group" action="{{ action('ProfessorController@salvar', $professores->id) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input class="form-control" type="text" name="nome" value="{{$professores->nome}}"><br>
      <label>Email</label><br>
      <input class="form-control" type="email" name="email" value="{{$professores->email}}"><br>
      <label>Contato</label><br>
      <input class="form-control" type="text" name="contato" value="{{$professores->contato}}"><br>
      <label>Área</label><br>
      <select class="form-control" name="disc_id">
        @foreach($disciplinas as $item)
        <option value="{{$item->id}}"><?php echo $item->nome ?></option>
        @endforeach
      </select><br>
      <label>Titulação</label><br>
      <input class="form-control" type="text" name="titulacao" value="{{$professores->titulacao}}"><br>
      <label>Formação</label><br>
      <input class="form-control" type="text" name="formacao" value="{{$professores->formacao}}"><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>
      <a class="btn btn-primary" href="{{ url()->previous()}}">Voltar</a>

@stop
