@extends('layout')

@section('titulo', 'Escolas')


@section('cabecalho')
  <h2>Escolas Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Nome</th>
  <th>Cidade</th>
  <th>Telefone</th>
  <th>CNPJ</th>
  <th>Bairro</th>
  <th>Rua</th>
  <th>Complemento</th>
</tr>

  @foreach($escolas as $item)
<tr>
    <td>{{$item->nome}}</td>
    
</tr>
  @endforeach

</table>
@stop
