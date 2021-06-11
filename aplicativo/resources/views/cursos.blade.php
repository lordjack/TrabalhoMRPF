@extends('layout')

@section('titulo', 'Cursos')


@section('cabecalho')
<h3 class="h3">Listagem de Cursos</h3><br>
<a class="btn btn-outline-primary" href="{{ action('CursoController@cadastrar') }}">Cadastrar Curso</a>
@stop


@section('listagem')<br>
<table class='table'>
    <tr>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    @foreach($cursos as $item)
    <tr>
        <td>{{$item->nome}}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="{{ action('CursoController@editar', $item->id) }}">Editar</a>
            <a class="btn btn-primary btn-sm" onclick=" return confirm('Remover curso?');" href="{{ action('CursoController@deletar', $item->id) }}">Excluir</a>
        </td>
    </tr>
    @endforeach

</table>
@stop
