<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Avaliação</title>
  </head>
  <body
  >
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
      <a class="nav-link  text-white" href="{{ action('AlunoController@listar', $aluno->turma_id) }}">Voltar</a>
          </li>
        </ul>
    </nav>
    </div>
    <div class="container mt-4">
    <form class="form-group" action="{{ action('AvaliacaoController@cadastrar', $aluno->id) }}" method="get" style="text-align:center">
    <table class="table" style="width:100%">
      <tr class="table-primary" >
        <th colspan="5">
      <h3>Delineamento do problema</h3>
    </th>
      </tr>
      <tr>
        <th>Ler o enunciado do problema com atenção, buscando a sua compreensão</th>
        <th>Representar a situação-problema por desenhos, gráficos ou diagramas para melhor visualizá-la</th>
        <th>Listar os dados (expressando as grandezas envolvidas em notação simbólica)</th>
        <th>Listar a(s) grandeza(s) incógnita(s), expressando-a(s) em notação simbólica)</th>
        <th>Verificar se as unidades das grandezas envolvidas fazem parte de um mesmo sistema de unidades; em caso negativo, estar atento para as transformações necessárias</th>

      </tr>
      <tr>
        <th> <select class="form-control" name="1">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="form-control" name="2">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="form-control" name="3">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="form-control" name="4">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="form-control" name="5">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <tr class=" table-primary">
          <th colspan="5">
          <h3 >Resolução do problema</h3>
          </th>
        </tr>
        <tr>



        <th>Analisar qualitativamente a situação-problema, elaborando as hipóteses necessárias</th>
        <th>Quantificar a situação-problema, escrevendo uma equação de definição, lei ou princípio em que esteja envolvida a grandeza incógnita e que seja adequada ao problema</th>
        <th>Situar e orientar o sistema de referência de forma a facilitar a resolução do problema</th>
        <th>Desenvolver o problema literalmente, fazendo as substituições numéricas apenas ao seu final ou ao final de cada etapa</th>
        <th></th>
        </tr>

        <th> <select class="form-control" name="6">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="form-control" name="7">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="form-control" name="8">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="form-control" name="9">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
      </tr>
      <tr>
      </tr>
      <tr class="table-primary">
        <th colspan="5">
        <h3>Análise do problema</h3>
        </th>
      </tr>
      <tr>

        <th>Analisar criticamente o resultado encontrado</th>
        <th>Registar, por escrito, as partes ou pontos chave no processo de resolução do problema</th>
        <th>Considerar o problema como ponto de partida para o estudo de novas situações-problema</th>
        <th></th>
        <th></th>
        </th>
      </tr>
      <tr>


        <th> <select class="form-control" name="10">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="form-control" name="11">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
        <th> <select class="form-control" name="12">
          <option value="">Não se aplica</option>
          <option value="0">Não fez</option>
          <option value="3">Insuficiente</option>
          <option value="7">Adequado</option>
          <option value="10">Excelente</option>
        </select> </th>
      </tr>
    </table>
    <input type="submit" name="confirmar" value="Calcular Notas" class="btn btn-primary" >
    </form>
    <hr>
    <?php
    $competencia1 = null;
    $competencia2 = null;
    $competencia3 = null;
    $notas[1] = null;
    $notas[2] = null;
    $notas[3] = null;
    $notas[4] = null;
    $notas[5] = null;
    $notas[6] = null;
    $notas[7] = null;
    $notas[8] = null;
    $notas[9] = null;
    $notas[10] = null;
    $notas[11] = null;
    $notas[12] = null;
     if (!empty($_GET['confirmar'])) {

      $notas = $_GET;
      $delineamento = array_slice($notas, 0, 5);
      $resolucao = array_slice($notas, 5, 4);
      $analise = array_slice($notas, 9, 3);

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
echo "<div style='text-align:center'>";
echo "<br>";
echo "<h3>Nota da competência 1: $competencia1</h3>";
echo "<h3>Nota da competência 2: $competencia2</h3>";
echo "<h3>Nota da competência 3: $competencia3</h3>";
echo "</div>";

$nota = ($competencia1 + $competencia2 + $competencia3)/3;
?>
    <h2 style='text-align:center'>Nota final: {{ $nota }}</h2>
    <form style='text-align:center' action="{{ action('AvaliacaoController@salvar', 0) }}" method="post">
      @csrf
      <input type="hidden" name="error" value="0">
      <input type="hidden" name="habilidade1" value="<?php echo "$notas[1]"; ?>">
      <input type="hidden" name="habilidade2" value="<?php echo "$notas[2]"; ?>">
      <input type="hidden" name="habilidade3" value="<?php echo "$notas[3]"; ?>">
      <input type="hidden" name="habilidade4" value="<?php echo "$notas[4]"; ?>">
      <input type="hidden" name="habilidade5" value="<?php echo "$notas[5]"; ?>">
      <input type="hidden" name="habilidade6" value="<?php echo "$notas[6]"; ?>">
      <input type="hidden" name="habilidade7" value="<?php echo "$notas[7]"; ?>">
      <input type="hidden" name="habilidade8" value="<?php echo "$notas[8]"; ?>">
      <input type="hidden" name="habilidade9" value="<?php echo "$notas[9]"; ?>">
      <input type="hidden" name="habilidade10" value="<?php echo "$notas[10]"; ?>">
      <input type="hidden" name="habilidade11" value="<?php echo "$notas[11]"; ?>">
      <input type="hidden" name="habilidade12" value="<?php echo "$notas[12]"; ?>">
      <input type="hidden" name="competencia1" value="<?php echo "$competencia1"; ?>">
      <input type="hidden" name="competencia2" value="<?php echo "$competencia2"; ?>">
      <input type="hidden" name="competencia3" value="<?php echo "$competencia3"; ?>">
      <input type="hidden" name="nota_final" value="<?php echo "$nota"; ?>">
      <input type="hidden" name="aluno_id" value="<?php echo "$aluno->id"; ?>">
      <input type="hidden" name="data" value="<?php echo date("Y/m/d"); ?>">
      <input type="submit" name="salvar" value="Salvar" class="btn btn-primary">
    </form>
    <footer style="margin-bottom:100px"></footer>
        </div>
  </body>
</html>
