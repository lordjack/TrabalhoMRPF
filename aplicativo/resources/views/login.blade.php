<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Entrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <h1 style="display: flex;
    justify-content: center;
    align-items: center;">Entrar</h1>
    <div style="display: flex;
      justify-content: center;
      align-items: center;
      height: 400px;
     ">
    <form action="{{ action('TurmaController@listar') }}" method="get" style="padding: 10px" class="border rounded border-dark">
        <h2>Bem vindo, informe suas credenciais</h2>
        <label>Usuário</label>
        <input class="form-group" type="text" name="login"><br>
        <label>Senha</label>
        <input class="form-group" type="password" name="senha"><br>
        <input type="submit" value="Entrar"> <a href="{{ url()->previous() }}">Voltar</a>
    </form>
  </div>

</body>

</html>
