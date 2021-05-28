<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-primary">
    <nav class="navbar navbar-expand-lg navbar-light" style="display:inline">
        <ul class="navbar-nav ml-5">
          <li class="navbar-item active">
      <a  class="nav-link  text-white" href="{{ url('/turmas')}}">Turmas</a>
          </li>
          <li class="navbar-item active">
      <a class="nav-link  text-white" href="{{ url('/professores')}}">Professores</a>
          </li>
          <li class="navbar-item active">
      <a class="nav-link  text-white" href="{{ url('/cursos')}}">Cursos</a>
          </li>
          <li class="navbar-item active">
      <a class="nav-link  text-white" href="{{ url()->previous() }}">Voltar</a>
          </li>
        </ul>
    </nav>
    </div>
    <div class="container mt-4">

      @yield('form')
  </div>
      </div>
  </body>
</html>
