@extends('cadastrar')

@section('titulo', 'Cadastrar Escolas')

@section('campos')

      <label>Nome</label><br>
      <input type="text" name="nome"><br>
      <label>Cidade_id</label><br>
      <input type="text" name="cidade_id"><br>
      <label>Rua</label><br>
      <input type="text" name="rua"><br>
      <label>Telefone</label><br>
      <input type="text" name="telefone"><br>
      <label>Bairro</label><br>
      <input type="text" name="bairro"><br>
      <label>Complemento</label><br>
      <input type="text" name="complemento"><br>
      <label>CNPJ</label><br>
      <input type="text" name="cnpj"><br>

@stop
