@extends('cadastrar')

@section('titulo', 'Cadastrar Professores')

@section('form')
<<<<<<< HEAD
<h3 class="h3">Cadastrar</h3><br>
<form class="form-group" action="{{ action('ProfessorController@salvar', 0) }}" method="post">
    @csrf
    <label>Nome</label><br>
    <input class="col-sm-3 form-control" type="text" name="nome" required><br>
    <label>Email</label><br>
    <input class="col-sm-3 form-control" type="email" name="email" required><br>
    <label>Contato</label><br>
    <input class="col-sm-3 form-control" type="text" name="contato" required><br>
    <label>Área</label><br>
    <input class="col-sm-3 form-control" type="text" name="area" required><br>
    <label>Titulação</label><br>
    <input class="col-sm-3 form-control" type="text" name="titulacao" required><br>
    <label>Formação</label><br>
    <input class="col-sm-3 form-control" type="text" name="formacao" required><br>
    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
    <a class="btn btn-primary" href="{{ url()->previous()}}"><i class="fas fa-arrow-left"></i> Voltar</a>
</form>

=======
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
>>>>>>> f641346a39de8261f39ecad3b013268931b54ec3


@stop
