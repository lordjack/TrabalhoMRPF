<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="{{ action('AlunoController@salvar', 0) }}" method="post">
      @csrf
      

      <input type="submit" value="Salvar">
    </form>
  </body>
</html>
