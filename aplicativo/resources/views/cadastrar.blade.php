<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

    <form class="" action="{{ action('AlunoController@salvar', 0) }}" method="post">
      @csrf
      @yield('campos')

      <input type="submit" class="btn btn-primary" value="Salvar">
    </form>

  </div>
  </body>
</html>
