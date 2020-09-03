<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>@yield('titulo')</title>
  </head>
  <body>
    <div class="container">
      <div style="display: 'inline'">
      <a href="{{ url('/turmas')}}">Turmas</a>
      <a href="{{ url('/professores')}}">Professores</a>
      <a href="{{ url('/cursos')}}">Cursos</a>
      </div>
      <div class="">
        @yield('cabecalho')
      </div>

      <div class="">
        @yield('listagem')
      </div>

      <div class="">
        <b>&copy;2020</b>
      </div>
    </div>
  </body>
</html>
