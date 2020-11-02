@extends('layout')

@section('titulo', 'Avaliações')

@section('graficos')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<?php
$dataPoints = array();
foreach ($avaliacoes as $item) {
  array_push($dataPoints, array("label" => $item->data ,'y' => $item->nota_final ));
}

$media = 0;
$divisor1 = 0;
$divisor2 = 0;
$divisor3 = 0;
$divisor4 = 0;
$divisor5 = 0;
$divisor6 = 0;
$divisor7 = 0;
$divisor8 = 0;
$divisor9 = 0;
$divisor10 = 0;
$divisor11 = 0;
$divisor12 = 0;
$divisorc1 = 0;
$divisorc2 = 0;
$divisorc3 = 0;
$soma1 = 0;
$soma2 = 0;
$soma3 = 0;
$soma4 = 0;
$soma5 = 0;
$soma6 = 0;
$soma7 = 0;
$soma8 = 0;
$soma9 = 0;
$soma10 = 0;
$soma11 = 0;
$soma12 = 0;
$somac1 = 0;
$somac2 = 0;
$somac3 = 0;



foreach ($avaliacoes as $item) {
  if (!is_null($item->habilidade1)) {
    $soma1 += $item->habilidade1;
    $divisor1++;
  }
  if (!is_null($item->habilidade2)) {
    $soma2 += $item->habilidade2;
    $divisor2++;
  }
  if (!is_null($item->habilidade3)) {
    $soma3 += $item->habilidade3;
    $divisor3++;
  }
  if (!is_null($item->habilidade4)) {
    $soma4 += $item->habilidade4;
    $divisor4++;
  }
  if (!is_null($item->habilidade5)) {
    $soma5 += $item->habilidade5;
    $divisor5++;
  }
  if (!is_null($item->habilidade6)) {
    $soma6 += $item->habilidade6;
    $divisor6++;
  }
  if (!is_null($item->habilidade7)) {
    $soma7 += $item->habilidade7;
    $divisor7++;
  }
  if (!is_null($item->habilidade8)) {
    $soma8 += $item->habilidade8;
    $divisor8++;
  }
  if (!is_null($item->habilidade9)) {
    $soma9 += $item->habilidade9;
    $divisor9++;
  }
  if (!is_null($item->habilidade10)) {
    $soma10 += $item->habilidade10;
    $divisor10++;
  }
  if (!is_null($item->habilidade11)) {
    $soma11 += $item->habilidade11;
    $divisor11++;
  }
  if (!is_null($item->habilidade12)) {
    $soma12 += $item->habilidade12;
    $divisor12++;
  }
  if (!is_null($item->competencia1)) {
    $somac1 += $item->competencia1;
    $divisorc1++;
  }
  if (!is_null($item->competencia2)) {
    $somac2 += $item->competencia2;
    $divisorc2++;
  }
  if (!is_null($item->competencia3)) {
    $somac3 += $item->competencia3;
    $divisorc3++;
  }

}
if ($divisor1 != 0) {
  $h1 = $soma1/$divisor1;
} else {
  $h1 = $soma1;
}
if ($divisor2 != 0) {
  $h2 = $soma2/$divisor2;
} else {
  $h2 = $soma2;
}
if ($divisor3 != 0) {
  $h3 = $soma3/$divisor3;
} else {
  $h3 = $soma3;
}
if ($divisor4 != 0) {
  $h4 = $soma4/$divisor4;
} else {
  $h4 = $soma4;
}
if ($divisor5 != 0) {
  $h5 = $soma5/$divisor5;
} else {
  $h5 = $soma5;
}
if ($divisor6 != 0) {
  $h6 = $soma6/$divisor6;
} else {
  $h6 = $soma6;
}
if ($divisor7 != 0) {
  $h7 = $soma7/$divisor7;
} else {
  $h7 = $soma7;
}
if ($divisor8 != 0) {
  $h8 = $soma8/$divisor8;
} else {
  $h8 = $soma8;
}
if ($divisor9 != 0) {
  $h9 = $soma9/$divisor9;
} else {
  $h9 = $soma9;
}
if ($divisor10 != 0) {
  $h10 = $soma10/$divisor10;
} else {
  $h10 = $soma10;
}
if ($divisor11 != 0) {
  $h11 = $soma11/$divisor11;
} else {
  $h11 = $soma11;
}
if ($divisor12 != 0) {
  $h12 = $soma12/$divisor12;
} else {
  $h12 = $soma12;
}
if ($divisorc1 != 0) {
  $c1 = $somac1/$divisorc1;
} else {
  $c1 = $somac1;
}
if ($divisorc2 != 0) {
  $c2 = $somac2/$divisorc2;
} else {
  $c2 = $somac2;
}
if ($divisorc3 != 0) {
  $c3 = $somac3/$divisorc3;
} else {
  $c3 = $somac3;
}


$medias = array(
  array("y" => $h1, "label" => "h1"),
  array("y" => $h2, "label" => "h2"),
  array("y" => $h3, "label" => "h3"),
  array("y" => $h4, "label" => "h4"),
  array("y" => $h5, "label" => "h5"),
  array("y" => $h6, "label" => "h6"),
  array("y" => $h7, "label" => "h7"),
  array("y" => $h8, "label" => "h8"),
  array("y" => $h9, "label" => "h9"),
  array("y" => $h10, "label" => "h10"),
  array("y" => $h11, "label" => "h11"),
  array("y" => $h12, "label" => "h12")
);

$mediasComp = array(
  array("y" => $c1, "label" => "Competencia 1"),
  array("y" => $c2, "label" => "Competencia 2"),
  array("y" => $c3, "label" => "Competencia 2")
);

 ?>
 <script>
window.onload = function () {

  var medias = new CanvasJS.Chart("desempenho_medias", {
	animationEnabled: true,
	theme: "light1",
	title:{
		text: "Médias do aluno"
	},
	axisY: {
		title: "Nota média por habilidade",
    maximum: 10
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.##",
		dataPoints: <?php echo json_encode($medias, JSON_NUMERIC_CHECK); ?>
	}]
});
medias.render();

var tempo = new CanvasJS.Chart("desempenho_tempo", {
	title: {
		text: "Desempenho ao longo do tempo"
	},
	axisY: {
		title: "Nota final",
    maximum: 100
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
tempo.render();

var mediasc = new CanvasJS.Chart("desempenho_mediasc", {
animationEnabled: true,
theme: "light1",
title:{
  text: "Médias do aluno por competência"
},
axisY: {
  title: "Nota média por Compentêcia",
  maximum: 100
},
data: [{
  type: "column",
  yValueFormatString: "#,##0.##",
  dataPoints: <?php echo json_encode($mediasComp, JSON_NUMERIC_CHECK); ?>
}]
});
mediasc.render();

}
</script>


@stop

@section('cabecalho')
  <h2>Avaliações Cadastradas:</h2>
@stop


@section('listagem')
<table class='table'>
<tr>
  <th>Data</th>
  <th>Nota Competencia 1</th>
  <th>Nota Compentecia 2</th>
  <th>Nota competencia 3</th>
  <th>Nota Final</th>
  <th>Ações</th>
</tr>

  @foreach($avaliacoes as $item)
<tr>
    <td>{{$item->data}}</td>
    <td>{{$item->competencia1}}</td>
    <td>{{$item->competencia2}}</td>
    <td>{{$item->competencia3}}</td>
    <td>{{$item->nota_final}}</td>

    <td>
      <a class="btn btn-primary btn-sm" onclick=" return confirm('Remover Avaliação?');" href="{{ action('AvaliacaoController@deletar', $item->id) }}">Excluir</a>
      <a class="btn btn-primary btn-sm" href="{{ action('AvaliacaoController@exibir', $item->id) }}">Exibir detalhes</a>
    </td>
</tr>
  @endforeach

</table>
<h2>Desempenho do aluno:</h2>
<div id="desempenho_tempo" style="height: 250px; width: 50%"></div>
<div id="desempenho_medias" style="height: 250px; width: 50% "></div>
<small>Notas "Não se aplica" não entram no cálculo da média do aluno</small>
<div id="desempenho_mediasc" style="height: 250px; width: 50%"></div>
<small>Notas "Não se aplica" não entram no cálculo da média do aluno</small>
@stop
