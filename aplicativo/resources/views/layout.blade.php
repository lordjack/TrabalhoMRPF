<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="{{ url('/')}}">Home</a>
    <div class="">
      @yield('cabecalho')
    </div>

    <div class="">
      @yield('listagem')
    </div>

    <div class="">
      <b>&copy;2020</b>
    </div>

  </body>
</html>
