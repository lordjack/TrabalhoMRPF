<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>@yield('titulo')</title>
    @yield('graficos')
  </head>
  <body>
    <div class="bg-primary">
    <nav class="navbar navbar-expand-lg navbar-light" style="display:inline">
        <ul class="navbar-nav ml-5">
          <li class="navbar-item active">
      <a  class="nav-link text-white" href="{{ url('/turmas')}}">Turmas</a>
          </li>
          <li class="navbar-item active">
      <a class="nav-link  text-white" href="{{ url('/professores')}}">Professores</a>
          </li>
          <li class="navbar-item active">
      <a class="nav-link  text-white" href="{{ url('/cursos')}}">Cursos</a>
          </li>
          <li class="navbar-item active">
            <a class="nav-link  text-white" href="{{ url('/responsavel')}}">Responsaveis</a>
                </li>

          <li class="navbar-item active">
      <a class="nav-link  text-white" href="{{ url()->previous() }}">Voltar</a>
          </li>

        </ul>
    </nav>
    </div>
    <div class="container">
          <hr class="my-0">
      <div class="mt-4">
        @yield('cabecalho')
      </div>

      <div class="">
        @yield('listagem')
      </div>

      <div class="">
        <b>&copy;2021</b>
      </div>
    </div>
        </div>

  </body>
</html>
