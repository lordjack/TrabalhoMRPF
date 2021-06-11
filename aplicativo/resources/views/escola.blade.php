@extends('layout')

@section('titulo', 'Escolas')

@section('cabecalho')
<h3>Listagem de Escolas</h3>
<a class="btn btn-outline-primary" href="{{ action('EscolaController@cadastrar') }}">Cadastrar</a>
@stop


@section('listagem')
<table class='table'>
    <tr>
        <th>Nome</th>
        <th>Cep</th>
        <th>Telefone</th>
        <th>Rua</th>
        <th>Numero</th>
        <th>Cnpj</th>
        <th>Email</th>
        <th>Sigla</th>
        <th>Cidade_id</th>
        <th>Bairro</th>
        <th>Tipo</th>
        <th>Ações</th>
    </tr>

    @foreach($escola as $item)
    <tr>
        <td>{{$item->nome}}</td>
        <td>{{$item->cep}}</td>
        <td>{{$item->telefone}}</td>
        <td>{{$item->rua}}</td>
        <td>{{$item->numero}}</td>
        <td>{{$item->cnpj}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->sigla}}</td>
        <td>{{$item->cidade_id}}</td>
        <td>{{$item->bairro}}</td>
        <td>{{$item->tipo}}</td>
        <td>
            <a class="btn btn-primary btn-sm" href="{{ action('EscolaController@editar', $item->id) }}">Editar</a>
            <a class="btn btn-primary btn-sm" onclick=" return confirm('Remover Escola?');" href="{{ action('EscolaController@deletar', $item->id) }}">Excluir</a>
        </td>
    </tr>
    @endforeach

</table>
@stop
