<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Algoritmo</title>
  </head>
  <body>
    <form class="" action="{{ action('AvaliacaoController@cadastrar', $aluno->id) }}" method="get">
    <table class="table">
      <tr>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
      </tr>
      <tr>
        <th> <select class="" name="1">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="" name="2">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="" name="3">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="" name="4">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="" name="5">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="" name="6">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
      </tr>
      <tr>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
        <th>11</th>
        <th>12</th>
        </th>
      </tr>
      <tr>

        <th> <select class="" name="7">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="" name="8">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="" name="9">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="" name="10">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="" name="11">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="" name="12">
          <option value="null">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
      </tr>
    </table>
    <input type="submit" name="confirmar" value="Confirmar">
    </form>
    <?php
    $competencia1 = 0;
    $competencia2 = 0;
    $competencia3 = 0;
    $notas;

     if (!empty($_GET['confirmar'])) {

      $notas = $_GET;
      $delineamento = array_slice($notas, 0, 5, true);
      $resolucao = array_slice($notas, 5, 4, true);
      $analise = array_slice($notas, 9, 3, true);

      $d =0;
      foreach ($delineamento as $item => $value) {
        if (is_numeric($value)) {
          $delineamento[$item] = $value;
          $d++;
        } else {
          $delineamento[$item] = 0;
        }
      }
      $r = 0;
      foreach ($resolucao as $item => $value) {
        if (is_numeric($value)) {
          $resolucao[$item] = $value;
          $r++;
        } else {
          $resolucao[$item] = 0;
        }
      }
      $a = 0;
      foreach ($analise as $item => $value) {
        if (is_numeric($value)) {
          $analise[$item] = $value;
          $a++;
        } else {
          $analise[$item] = 0;
        }
      }

      if ($d == 0 or $r == 0 or $a ==0) {
        echo "<script>alert('Selecione ao menos uma habilidade para avaliar por competência');</script>";
      }else {
        $d = 10/$d;
        $r = 10/$r;
        $a = 10/$a;

        foreach ($delineamento as $item) {
          $item = $item * $d;
          $competencia1 += $item;
        }
        foreach ($resolucao as $item) {
          $item = $item * $r;
          $competencia2 += $item;
        }
        foreach ($analise as $item) {
          $item = $item * $a;
          $competencia3 += $item;
        }
      }
    }
echo "<h2>Nota da competência 1: $competencia1</h2>";
echo "<h2>Nota da competência 2: $competencia2</h2>";
echo "<h2>Nota da competência 3: $competencia3</h2>";

$nota = ($competencia1 + $competencia2 + $competencia3)/3;
?>
    <h2>Nota final: {{ $nota }}</h2>
    <?php echo "$aluno->nome"; ?>
    <form  action="{{ action('AvaliacaoController@salvar', 0) }}" method="post">
      @csrf
      <input type="hidden" name="competencia1" value="<?php echo "$competencia1"; ?>">
      <input type="hidden" name="competencia2" value="<?php echo "$competencia2"; ?>">
      <input type="hidden" name="competencia3" value="<?php echo "$competencia3"; ?>">
      <input type="hidden" name="nota_final" value="<?php echo "$nota"; ?>">
      <input type="hidden" name="aluno_id" value="<?php echo "$aluno->id"; ?>">
      <input type="hidden" name="data" value="<?php echo date("Y/m/d"); ?>">
      <input type="submit" name="salvar" value="Salvar">
    </form>
  </body>
</html>
