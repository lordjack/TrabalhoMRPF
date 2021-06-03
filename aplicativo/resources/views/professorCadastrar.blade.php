@extends('cadastrar')

@section('titulo', 'Cadastrar Professores')

@section('form')
<h3 class="h3">Cadastrar Professor</h3><br>
    <form class="form-group" action="{{ action('ProfessorController@salvar', 0) }}" method="post">
      @csrf
      <label>Nome</label><br>
      <input class="form-control" type="text" name="nome" required><br>
      <label>Email</label><br>
      <input class="form-control" type="email" name="email" required><br>
      <label>Contato</label><br>
      <input class="form-control" type="text" name="contato" required><br>
      <label>Disciplina</label><br>
      <select class="form-control" name="disc_id">
        @foreach($disciplinas as $item)
        <option value="{{$item->id}}"><?php echo $item->name ?></option>
        @endforeach
      </select><br>
      <label>Titulação</label><br>
      <select class="form-control" name="titulacao" value="titulacao" required>
        <option>Escolha sua titulação</option>
        <option value="Mestrado">Mestrado</option>
        <option value="Pós-Graduação">Pós-Graduação</option>
        <option value="Doutorado">Doutorado</option>
        <option value="Somente Ensino Superior">Somente Ensino Superior</option>
    </select><br>
      <label>Formação</label><br>
      <input class="form-control" type="text" name="formacao" required><br>
      <input type="submit" class="btn btn-primary" value="Salvar">
      </form>
      <a class="btn btn-primary" href="{{ url()->previous()}}">Voltar</a>


@stop
