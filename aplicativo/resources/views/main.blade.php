<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Menu principal</title>
  </head>
  <body>
    <div class="container">
    <h3>{Nome do Projeto}</h3>

    <h4>{Informações relevantes}</h4>
    <p>{Descrição do Projeto}</p>

  <a class="btn btn-info" href="{{ url('login')}}" type="button">Entrar no sistema</a>
  <a class="btn btn-info" href="{{ url('cadastro')}}" type="button">Criar Conta</a>
    </div>
  </body>
</html>
