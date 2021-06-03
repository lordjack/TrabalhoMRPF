@extends('cadastrar')

@section('titulo', 'Cadastrar Professores')

@section('form')
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

@stop
