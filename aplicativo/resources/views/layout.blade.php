<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>@yield('titulo')</title>
    @yield('graficos')
  </head>
  <body class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="display:inline">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="navbar-item active">
      <a  class="nav-link" href="{{ url('/turmas')}}">Turmas</a>
          </li>
          <li class="navbar-item active">
      <a class="nav-link" href="{{ url('/professores')}}">Professores</a>
          </li>
          <li class="navbar-item active">
      <a class="nav-link" href="{{ url('/cursos')}}">Cursos</a>
          </li>
          <li class="navbar-item active">
      <a class="nav-link" href="{{ url()->previous() }}">Voltar</a>
          </li>
        </ul>
      </div>
    </nav>
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
