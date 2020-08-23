<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="{{ action('EscolaController@salvar', 0) }}" method="post">
      @csrf

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

      <input type="submit" value="Salvar">
    </form>
  </body>
</html>
