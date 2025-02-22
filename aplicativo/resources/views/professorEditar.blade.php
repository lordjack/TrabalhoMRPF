@extends('cadastrar')

@section('titulo', 'Cadastrar Professores')

@section('form')
<<<<<<< HEAD
<h3 class="h3">Editar</h3><br>

<form class="form-group" action="{{ action('ProfessorController@salvar', $professores->id) }}" method="post">
    @csrf
    <label>Nome</label><br>
    <input class="col-sm-3 form-control" type=" text" name="nome" value="{{$professores->nome}}"><br>
    <label>Email</label><br>
    <input class="col-sm-3 form-control" type=" email" name="email" value="{{$professores->email}}"><br>
    <label>Contato</label><br>
    <input class="col-sm-3 form-control" type=" text" name="contato" value="{{$professores->contato}}"><br>
    <label>Área</label><br>
    <input class="col-sm-3 form-control" type=" text" name="area" value="{{$professores->area}}"><br>
    <label>Titulação</label><br>
    <input class="col-sm-3 form-control" type=" text" name="titulacao" value="{{$professores->titulacao}}"><br>
    <label>Formação</label><br>
    <input class="col-sm-3 form-control" type=" text" name="formacao" value="{{$professores->formacao}}"><br>
    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
    <a class="btn btn-primary" href="{{ url()->previous()}}"><i class="fas fa-arrow-left"></i> Voltar</a>
</form>

=======
    <h3 class="h3">Editar Professor</h3><br>

    <form class="form-group" action="{{ action('ProfessorController@salvar', $professores->id) }}" method="post">
        @csrf
        <label>Nome</label><br>
        <input class="form-control" type="text" name="nome" value="{{ $professores->nome }}"><br>
        <label>Email</label><br>
        <input class="form-control" type="email" name="email" value="{{ $professores->email }}"><br>
        <label>Contato</label><br>
        <input class="form-control" type="text" name="contato" value="{{ $professores->contato }}"><br>
        <label>Área</label><br>
        <select class="form-control" name="disc_id">
            @foreach ($disciplinas as $item)
                <option value="{{ $item->id }}"><?php echo $item->name; ?></option>
            @endforeach
        </select><br>
        <label>Titulação</label><br>
        <select class="form-control" name="titulacao">
            <option <?php echo $professores->titulacao === 'Mestrado' ? 'selected' : ''; ?>
                value="Mestrado">Mestrado</option>
            <option <?php echo $professores->titulacao === 'Pós-Graduação' ? 'selected' : ''; ?> value="Pós-Graduação">Pós-Graduação</option>
            <option <?php echo $professores->titulacao === 'Doutorado' ? 'selected' : ''; ?>
                value="Doutorado">Doutorado</option>
            <option <?php echo $professores->titulacao === 'Somente Ensino Superior' ? 'selected' : ''; ?> value="Somente Ensino Superior">Somente Ensino Superior</option>

        </select><br>
        <label>Formação</label><br>
        <input class="form-control" type="text" name="formacao" value="{{ $professores->formacao }}"><br>
        <input type="submit" class="btn btn-primary" value="Salvar">
    </form>
    <a class="btn btn-primary" href="{{ url()->previous() }}">Voltar</a>
>>>>>>> f641346a39de8261f39ecad3b013268931b54ec3

@stop
