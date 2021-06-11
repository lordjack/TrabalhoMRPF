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
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#" style="color: aliceblue">Sistema Gerenciador de Valiações</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="navbar-item active">
                        <a class="nav-link text-white" href="{{ url('/turmas')}}">Turmas</a>
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
                        <a class="nav-link  text-white" href="{{ url('/disciplina')}}">Disciplinas</a>
                    </li>
                    <li class="navbar-item active">
                        <a class="nav-link  text-white" href="{{ url('/escolas')}}">Escolas</a>
                    </li>
                    <li class="navbar-item active">
                        <a class="nav-link  text-white" href="{{ url()->previous() }}">Voltar</a>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf

                    <input type="submit" class="btn btn-outline-warning" value="Sair">
                </form>

            </div>

        </nav>
    </div>
    <div class="container">
        <hr class="my-0">
        <div class="mt-4">
            @yield('cabecalho')


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
