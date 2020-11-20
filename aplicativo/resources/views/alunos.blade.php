<?php

use App\Avaliacao;
$nfez = [NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL];
$insuficiente = [NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL];
$adequado = [NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL];
$excelente = [NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL];

foreach ($alunos as $item) {
  $avaliacao = Avaliacao::where('aluno_id', $item->id)->get();
  $habilidade1 = NULL;
  $habilidade2 = NULL;
  $habilidade3 = NULL;
  $habilidade4 = NULL;
  $habilidade5 = NULL;
  $habilidade6 = NULL;
  $habilidade7 = NULL;
  $habilidade8 = NULL;
  $habilidade9 = NULL;
  $habilidade10 = NULL;
  $habilidade11 = NULL;
  $habilidade12 = NULL;
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


    foreach ($avaliacao as $prova) {

      if (is_numeric($prova->competencia1)) {
        $competencia1 = $prova->competencia1;

      }


      if ($competencia1 >= 0 && $competencia1 < 30 && is_numeric($competencia1)) {
      $nfez[13]++;
    } elseif ($competencia1 >= 30 && $competencia1 < 70 && is_numeric($competencia1)) {
      $insuficiente[13]++;
    } elseif ($competencia1 >= 70 && $competencia1 < 100 && is_numeric($competencia1)) {
      $adequado[13]++;
    }elseif ($competencia1 == 100 && is_numeric($competencia1)){
      $excelente[13]++;
      }
      if (is_numeric($prova->competencia2)) {
        $competencia2 = $prova->competencia2;

      }


      if ($competencia2 >= 0 && $competencia2 < 30 && is_numeric($competencia2)) {
      $nfez[14]++;
    } elseif ($competencia2 >= 30 && $competencia2 < 70 && is_numeric($competencia2)) {
      $insuficiente[14]++;
    } elseif ($competencia2 >= 70 && $competencia2 < 100 && is_numeric($competencia2)) {
      $adequado[14]++;
    }elseif ($competencia2 == 100 && is_numeric($competencia2)){
      $excelente[14]++;
      }
      if (is_numeric($prova->competencia3)) {
        $competencia3 = $prova->competencia3;

      }


      if ($competencia3 >= 0 && $competencia3 < 30 && is_numeric($competencia3)) {
      $nfez[15]++;
    } elseif ($competencia3 >= 30 && $competencia3 < 70 && is_numeric($competencia3)) {
      $insuficiente[15]++;
    } elseif ($competencia3 >= 70 && $competencia3 < 100 && is_numeric($competencia3)) {
      $adequado[15]++;
    }elseif ($competencia3 == 100 && is_numeric($competencia3)){
      $excelente[15]++;
      }

      if (is_numeric($prova->habilidade1)) {
        $habilidade1 = $prova->habilidade1;

      }


  if ($habilidade1 >= 0 && $habilidade1 < 3 && is_numeric($habilidade1)) {
    $nfez[1]++;
  } elseif ($habilidade1 >= 3 && $habilidade1 < 7 && is_numeric($habilidade1)) {
    $insuficiente[1]++;
  } elseif ($habilidade1 >= 7 && $habilidade1 < 10 && is_numeric($habilidade1)) {
    $adequado[1]++;
  }elseif ($habilidade1 == 10 && is_numeric($habilidade1)){
    $excelente[1]++;
  }



    if (is_numeric($prova->habilidade2)) {
      $habilidade2 = $prova->habilidade2;

    }


  if ($habilidade2 >= 0 && $habilidade2 < 3 && is_numeric($habilidade2)) {
  $nfez[2]++;
  } elseif ($habilidade2 >= 3 && $habilidade2 < 7 && is_numeric($habilidade2)) {
  $insuficiente[2]++;
} elseif ($habilidade2 >= 7 && $habilidade2 < 10 && is_numeric($habilidade2)) {
  $adequado[2]++;
}elseif ($habilidade2 == 10 && is_numeric($habilidade2)) {
  $excelente[2]++;
  }

    if (is_numeric($prova->habilidade3)) {
      $habilidade3 = $prova->habilidade3;

    }


  if ($habilidade3 >= 0 && $habilidade3 < 3 && is_numeric($habilidade3)) {
  $nfez[3]++;
} elseif ($habilidade3 >= 3 && $habilidade3 < 7 && is_numeric($habilidade3)) {
  $insuficiente[3]++;
} elseif ($habilidade3 >= 7 && $habilidade3 < 10 && is_numeric($habilidade3)) {
  $adequado[3]++;
}elseif ($habilidade3 == 10 && is_numeric($habilidade3)) {
  $excelente[3]++;
  }

    if (is_numeric($prova->habilidade4)) {
      $habilidade4 = $prova->habilidade4;
    }


  if ($habilidade4 >= 0 && $habilidade4 < 3 && is_numeric($habilidade4)) {
  $nfez[4]++;
} elseif ($habilidade4 >= 3 && $habilidade4 < 7 && is_numeric($habilidade4)) {
  $insuficiente[4]++;
} elseif ($habilidade4 >= 7 && $habilidade4 < 10 && is_numeric($habilidade4)) {
  $adequado[4]++;
}elseif ($habilidade4 == 10 && is_numeric($habilidade4)) {
  $excelente[4]++;
  }

    if (is_numeric($prova->habilidade5)) {
      $habilidade5 = $prova->habilidade5;

    }


  if ($habilidade5 >= 0 && $habilidade5 < 3 && is_numeric($habilidade5)) {
  $nfez[5]++;
} elseif ($habilidade5 >= 3 && $habilidade5 < 7 && is_numeric($habilidade5)) {
  $insuficiente[5]++;
} elseif ($habilidade5 >= 7 && $habilidade5 < 10 && is_numeric($habilidade5)) {
  $adequado[5]++;
}elseif ($habilidade5 == 10 && is_numeric($habilidade5)) {
  $excelente[5]++;
  }

    if (is_numeric($prova->habilidade6)) {
      $habilidade6 = $prova->habilidade6;

    }


  if ($habilidade6 >= 0 && $habilidade6 < 3 && is_numeric($habilidade6)) {
  $nfez[6]++;
} elseif ($habilidade6 >= 3 && $habilidade6 < 7 && is_numeric($habilidade6)) {
  $insuficiente[6]++;
} elseif ($habilidade6 >= 7 && $habilidade6 < 10 && is_numeric($habilidade6)) {
  $adequado[6]++;
}elseif ($habilidade6 == 10 && is_numeric($habilidade6)) {
  $excelente[6]++;
  }

    if (is_numeric($prova->habilidade7)) {
      $habilidade7 = $prova->habilidade7;

    }


  if ($habilidade7 >= 0 && $habilidade7 < 3 && is_numeric($habilidade7)) {
  $nfez[7]++;
} elseif ($habilidade7 >= 3 && $habilidade7 < 7 && is_numeric($habilidade7)) {
  $insuficiente[7]++;
} elseif ($habilidade7 >= 7 && $habilidade7 < 10 && is_numeric($habilidade7)) {
  $adequado[7]++;
}elseif ($habilidade7 == 10 && is_numeric($habilidade7)) {
  $excelente[7]++;
  }

    if (is_numeric($prova->habilidade8)) {
      $habilidade8 = $prova->habilidade8;

    }


  if ($habilidade8 >= 0 && $habilidade8 < 3 && is_numeric($habilidade8)) {
  $nfez[8]++;
} elseif ($habilidade8 >= 3 && $habilidade8 < 7 && is_numeric($habilidade8)) {
  $insuficiente[8]++;
} elseif ($habilidade8 >= 7 && $habilidade8 < 10 && is_numeric($habilidade8)) {
  $adequado[8]++;
}elseif ($habilidade8 == 10 && is_numeric($habilidade8)) {
  $excelente[8]++;
  }

    if (is_numeric($prova->habilidade9)) {
      $habilidade9 = $prova->habilidade9;
    }


  if ($habilidade9 >= 0 && $habilidade9 < 3 && is_numeric($habilidade9)) {
  $nfez[9]++;
} elseif ($habilidade9 >= 3 && $habilidade9 < 7 && is_numeric($habilidade9)) {
  $insuficiente[9]++;
} elseif ($habilidade9 >= 7 && $habilidade9 < 10 && is_numeric($habilidade9)) {
  $adequado[9]++;
}elseif ($habilidade9 == 10 && is_numeric($habilidade9)) {
  $excelente[9]++;
  }

    if (is_numeric($prova->habilidade10)) {
      $habilidade10 = $prova->habilidade10;

    }


  if ($habilidade10 >= 0 && $habilidade10 < 3 && is_numeric($habilidade10)) {
  $nfez[10]++;
} elseif ($habilidade10 >= 3 && $habilidade10 < 7 && is_numeric($habilidade10)) {
  $insuficiente[10]++;
} elseif ($habilidade10 >= 7 && $habilidade10 < 10 && is_numeric($habilidade10)) {
  $adequado[10]++;
}elseif ($habilidade10 == 10 && is_numeric($habilidade10)) {
  $excelente[10]++;
  }

    if (is_numeric($prova->habilidade11)) {
      $habilidade11 = $prova->habilidade11;

    }


  if ($habilidade11 >= 0 && $habilidade11 < 3 && is_numeric($habilidade11)) {
  $nfez[11]++;
} elseif ($habilidade11 >= 3 && $habilidade11 < 7 && is_numeric($habilidade11)) {
  $insuficiente[11]++;
} elseif ($habilidade11 >= 7 && $habilidade11 < 10 && is_numeric($habilidade11)) {
  $adequado[11]++;
}elseif ($habilidade11 == 10 && is_numeric($habilidade11)) {
  $excelente[11]++;
  }

    if (is_numeric($prova->habilidade12)) {
      $habilidade12 = $prova->habilidade12;

  }


  if ($habilidade12 >= 0 && $habilidade12 < 3 && is_numeric($habilidade12)) {
  $nfez[12]++;
} elseif ($habilidade12 >= 3 && $habilidade12 < 7 && is_numeric($habilidade12)) {
  $insuficiente[12]++;
} elseif ($habilidade12 >= 7 && $habilidade12 < 10 && is_numeric($habilidade12)) {
  $adequado[12]++;
}elseif ($habilidade12 == 10 && is_numeric($habilidade12)) {
  $excelente[12]++;
    }
  }
}




if ($nfez[1] == NULL && $insuficiente[1] == NULL && $adequado[1] == NULL && $excelente[1] == NULL) {
  $totalh1 = NULL;
}else {
  $totalh1 = $nfez[1] + $insuficiente[1] + $adequado[1] + $excelente[1];
}
if ($nfez[2] == NULL && $insuficiente[2] == NULL && $adequado[2] == NULL && $excelente[2] == NULL) {
  $totalh2 = NULL;
}else {
  $totalh2 = $nfez[2] + $insuficiente[2] + $adequado[2] + $excelente[2];
}

if ($nfez[3] == NULL && $insuficiente[3] == NULL && $adequado[3] == NULL && $excelente[3] == NULL) {
  $totalh3 = NULL;
}else {
  $totalh3 = $nfez[3] + $insuficiente[3] + $adequado[3] + $excelente[3];
}

if ($nfez[4] == NULL && $insuficiente[4] == NULL && $adequado[4] == NULL && $excelente[4] == NULL) {
  $totalh4 = NULL;
}else {
  $totalh4 = $nfez[4] + $insuficiente[4] + $adequado[4] + $excelente[4];
}

if ($nfez[5] == NULL && $insuficiente[5] == NULL && $adequado[5] == NULL && $excelente[5] == NULL) {
  $totalh5 = NULL;
}else {
  $totalh5 = $nfez[5] + $insuficiente[5] + $adequado[5] + $excelente[5];
}

if ($nfez[6] == NULL && $insuficiente[6] == NULL && $adequado[6] == NULL && $excelente[6] == NULL) {
  $totalh6 = NULL;
}else {
  $totalh6 = $nfez[6] + $insuficiente[6] + $adequado[6] + $excelente[6];
}

if ($nfez[7] == NULL && $insuficiente[7] == NULL && $adequado[7] == NULL && $excelente[7] == NULL) {
  $totalh7 = NULL;
}else {
  $totalh7 = $nfez[7] + $insuficiente[7] + $adequado[7] + $excelente[7];
}

if ($nfez[8] == NULL && $insuficiente[8] == NULL && $adequado[8] == NULL && $excelente[8] == NULL) {
  $totalh8 = NULL;
}else {
  $totalh8 = $nfez[8] + $insuficiente[8] + $adequado[8] + $excelente[8];
}

if ($nfez[9] == NULL && $insuficiente[9] == NULL && $adequado[9] == NULL && $excelente[9] == NULL) {
  $totalh9 = NULL;
}else {
  $totalh9 = $nfez[9] + $insuficiente[9] + $adequado[9] + $excelente[9];
}

if ($nfez[10] == NULL && $insuficiente[10] == NULL && $adequado[10] == NULL && $excelente[10] == NULL) {
  $totalh10 = NULL;
}else {
  $totalh10 = $nfez[10] + $insuficiente[10] + $adequado[10] + $excelente[10];
}

if ($nfez[11] == NULL && $insuficiente[11] == NULL && $adequado[11] == NULL && $excelente[11] == NULL) {
  $totalh11 = NULL;
}else {
  $totalh11 = $nfez[11] + $insuficiente[11] + $adequado[11] + $excelente[11];
}

if ($nfez[12] == NULL && $insuficiente[12] == NULL && $adequado[12] == NULL && $excelente[12] == NULL) {
  $totalh12 = NULL;
}else {
  $totalh12 = $nfez[12] + $insuficiente[12] + $adequado[12] + $excelente[12];
}
if ($nfez[13] == NULL && $insuficiente[13] == NULL && $adequado[13] == NULL && $excelente[13] == NULL) {
  $totalc1 = NULL;
}else {
  $totalc1 = $nfez[13] + $insuficiente[13] + $adequado[13] + $excelente[13];
}
if ($nfez[14] == NULL && $insuficiente[14] == NULL && $adequado[14] == NULL && $excelente[14] == NULL) {
  $totalc2 = NULL;
}else {
  $totalc2 = $nfez[14] + $insuficiente[14] + $adequado[14] + $excelente[14];
}
if ($nfez[15] == NULL && $insuficiente[15] == NULL && $adequado[15] == NULL && $excelente[15] == NULL) {
  $totalc3 = NULL;
}else {
  $totalc3 = $nfez[15] + $insuficiente[15] + $adequado[15] + $excelente[15];
}




if ($totalh1 == NULL) {
  $nfez[1] == NULL;
  $insuficiente[1] == NULL;
  $adequado[1] == NULL;
  $excelente[1] == NULL;
} else {
  $nfez[1] = $nfez[1]*100/$totalh1;
  $insuficiente[1] = $insuficiente[1]*100/$totalh1;
  $adequado[1] = $adequado[1]*100/$totalh1;
  $excelente[1] = $excelente[1]*100/$totalh1;
}
if ($totalh2 == NULL) {
  $nfez[2] == NULL;
  $insuficiente[2] == NULL;
  $adequado[2] == NULL;
  $excelente[2] == NULL;
} else {
  $nfez[2] = $nfez[2]*100/$totalh2;
  $insuficiente[2] = $insuficiente[2]*100/$totalh2;
  $adequado[2] = $adequado[2]*100/$totalh2;
  $excelente[2] = $excelente[2]*100/$totalh2;
}
if ($totalh3 == NULL) {
  $nfez[3] == NULL;
  $insuficiente[3] == NULL;
  $adequado[3] == NULL;
  $excelente[3] == NULL;
} else {
  $nfez[3] = $nfez[3]*100/$totalh3;
  $insuficiente[3] = $insuficiente[3]*100/$totalh3;
  $adequado[3] = $adequado[3]*100/$totalh3;
  $excelente[3] = $excelente[3]*100/$totalh3;
}
if ($totalh4 == NULL) {
  $nfez[4] == NULL;
  $insuficiente[4] == NULL;
  $adequado[4] == NULL;
  $excelente[4] == NULL;
} else {
  $nfez[4] = $nfez[4]*100/$totalh4;
  $insuficiente[4] = $insuficiente[4]*100/$totalh4;
  $adequado[4] = $adequado[4]*100/$totalh4;
  $excelente[4] = $excelente[4]*100/$totalh4;
}
if ($totalh5 == NULL) {
  $nfez[5] == NULL;
  $insuficiente[5] == NULL;
  $adequado[5] == NULL;
  $excelente[5] == NULL;
} else {
  $nfez[5] = $nfez[5]*100/$totalh5;
  $insuficiente[5] = $insuficiente[5]*100/$totalh5;
  $adequado[5] = $adequado[5]*100/$totalh5;
  $excelente[5] = $excelente[5]*100/$totalh5;
}
if ($totalh6 == NULL) {
  $nfez[6] == NULL;
  $insuficiente[6] == NULL;
  $adequado[6] == NULL;
  $excelente[6] == NULL;
} else {
  $nfez[6] = $nfez[6]*100/$totalh6;
  $insuficiente[6] = $insuficiente[6]*100/$totalh6;
  $adequado[6] = $adequado[6]*100/$totalh6;
  $excelente[6] = $excelente[6]*100/$totalh6;
}
if ($totalh7 == NULL) {
  $nfez[7] == NULL;
  $insuficiente[7] == NULL;
  $adequado[7] == NULL;
  $excelente[7] == NULL;
} else {
  $nfez[7] = $nfez[7]*100/$totalh7;
  $insuficiente[7] = $insuficiente[7]*100/$totalh7;
  $adequado[7] = $adequado[7]*100/$totalh7;
  $excelente[7] = $excelente[7]*100/$totalh7;
}
if ($totalh8 == NULL) {
  $nfez[8] == NULL;
  $insuficiente[8] == NULL;
  $adequado[8] == NULL;
  $excelente[8] == NULL;
} else {
  $nfez[8] = $nfez[8]*100/$totalh8;
  $insuficiente[8] = $insuficiente[8]*100/$totalh8;
  $adequado[8] = $adequado[8]*100/$totalh8;
  $excelente[8] = $excelente[8]*100/$totalh8;
}
if ($totalh9 == NULL) {
  $nfez[9] == NULL;
  $insuficiente[9] == NULL;
  $adequado[9] == NULL;
  $excelente[9] == NULL;
} else {
  $nfez[9] = $nfez[9]*100/$totalh9;
  $insuficiente[9] = $insuficiente[9]*100/$totalh9;
  $adequado[9] = $adequado[9]*100/$totalh9;
  $excelente[9] = $excelente[9]*100/$totalh9;
}
if ($totalh10 == NULL) {
  $nfez[10] == NULL;
  $insuficiente[10] == NULL;
  $adequado[10] == NULL;
  $excelente[10] == NULL;
} else {
  $nfez[10] = $nfez[10]*100/$totalh10;
  $insuficiente[10] = $insuficiente[10]*100/$totalh10;
  $adequado[10] = $adequado[10]*100/$totalh10;
  $excelente[10] = $excelente[10]*100/$totalh10;
}
if ($totalh11 == NULL) {
  $nfez[11] == NULL;
  $insuficiente[11] == NULL;
  $adequado[11] == NULL;
  $excelente[11] == NULL;
} else {
  $nfez[11] = $nfez[11]*1100/$totalh11;
  $insuficiente[11] = $insuficiente[11]*100/$totalh11;
  $adequado[11] = $adequado[11]*100/$totalh11;
  $excelente[11] = $excelente[11]*100/$totalh11;
}
if ($totalh12 == NULL) {
  $nfez[12] == NULL;
  $insuficiente[12] == NULL;
  $adequado[12] == NULL;
  $excelente[12] == NULL;
} else {
  $nfez[12] = $nfez[12]*100/$totalh12;
  $insuficiente[12] = $insuficiente[12]*100/$totalh12;
  $adequado[12] = $adequado[12]*100/$totalh12;
  $excelente[12] = $excelente[12]*100/$totalh12;
}
if ($totalc1 == NULL) {
  $nfez[13] == NULL;
  $insuficiente[13] == NULL;
  $adequado[13] == NULL;
  $excelente[13] == NULL;
} else {
  $nfez[13] = $nfez[13]*100/$totalc1;
  $insuficiente[13] = $insuficiente[13]*100/$totalc1;
  $adequado[13] = $adequado[13]*100/$totalc1;
  $excelente[13] = $excelente[13]*100/$totalc1;
}
if ($totalc2 == NULL) {
  $nfez[14] == NULL;
  $insuficiente[14] == NULL;
  $adequado[14] == NULL;
  $excelente[14] == NULL;
} else {
  $nfez[14] = $nfez[14]*100/$totalc2;
  $insuficiente[14] = $insuficiente[14]*100/$totalc2;
  $adequado[14] = $adequado[14]*100/$totalc2;
  $excelente[14] = $excelente[14]*100/$totalc2;
}
if ($totalc3 == NULL) {
  $nfez[15] == NULL;
  $insuficiente[15] == NULL;
  $adequado[15] == NULL;
  $excelente[15] == NULL;
} else {
  $nfez[15] = $nfez[15]*100/$totalc3;
  $insuficiente[15] = $insuficiente[15]*100/$totalc3;
  $adequado[15] = $adequado[15]*100/$totalc3;
  $excelente[15] = $excelente[15]*100/$totalc3;
}

 ?>


@extends('layout')

@section('titulo', 'Alunos')

@section('graficos')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<?php
$c1 = array(
	array("label"=>"Não Fez", "y"=>$nfez[13]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[13]),
	array("label"=>"Adequado", "y"=>$adequado[13]),
	array("label"=>"Excelente", "y"=>$excelente[13]),
);
$c2 = array(
	array("label"=>"Não Fez", "y"=>$nfez[14]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[14]),
	array("label"=>"Adequado", "y"=>$adequado[14]),
	array("label"=>"Excelente", "y"=>$excelente[14]),
);
$c3 = array(
	array("label"=>"Não Fez", "y"=>$nfez[15]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[15]),
	array("label"=>"Adequado", "y"=>$adequado[15]),
	array("label"=>"Excelente", "y"=>$excelente[15]),
);
$h1 = array(
	array("label"=>"Não Fez", "y"=>$nfez[1]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[1]),
	array("label"=>"Adequado", "y"=>$adequado[1]),
	array("label"=>"Excelente", "y"=>$excelente[1]),
);
$h2 = array(
	array("label"=>"Não Fez", "y"=>$nfez[2]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[2]),
	array("label"=>"Adequado", "y"=>$adequado[2]),
	array("label"=>"Excelente", "y"=>$excelente[2]),
);
$h3 = array(
	array("label"=>"Não Fez", "y"=>$nfez[3]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[3]),
	array("label"=>"Adequado", "y"=>$adequado[3]),
	array("label"=>"Excelente", "y"=>$excelente[3]),
);
$h4 = array(
	array("label"=>"Não Fez", "y"=>$nfez[4]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[4]),
	array("label"=>"Adequado", "y"=>$adequado[4]),
	array("label"=>"Excelente", "y"=>$excelente[4]),
);
$h5 = array(
	array("label"=>"Não Fez", "y"=>$nfez[5]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[5]),
	array("label"=>"Adequado", "y"=>$adequado[5]),
	array("label"=>"Excelente", "y"=>$excelente[5]),
);
$h6 = array(
	array("label"=>"Não Fez", "y"=>$nfez[6]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[6]),
	array("label"=>"Adequado", "y"=>$adequado[6]),
	array("label"=>"Excelente", "y"=>$excelente[6]),
);
$h6 = array(
	array("label"=>"Não Fez", "y"=>$nfez[6]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[6]),
	array("label"=>"Adequado", "y"=>$adequado[6]),
	array("label"=>"Excelente", "y"=>$excelente[6]),
);
$h7 = array(
	array("label"=>"Não Fez", "y"=>$nfez[7]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[7]),
	array("label"=>"Adequado", "y"=>$adequado[7]),
	array("label"=>"Excelente", "y"=>$excelente[7]),
);
$h8 = array(
	array("label"=>"Não Fez", "y"=>$nfez[8]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[8]),
	array("label"=>"Adequado", "y"=>$adequado[8]),
	array("label"=>"Excelente", "y"=>$excelente[8]),
);
$h9 = array(
	array("label"=>"Não Fez", "y"=>$nfez[9]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[9]),
	array("label"=>"Adequado", "y"=>$adequado[9]),
	array("label"=>"Excelente", "y"=>$excelente[9]),
);
$h10 = array(
	array("label"=>"Não Fez", "y"=>$nfez[10]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[10]),
	array("label"=>"Adequado", "y"=>$adequado[10]),
	array("label"=>"Excelente", "y"=>$excelente[10]),
);
$h11 = array(
	array("label"=>"Não Fez", "y"=>$nfez[11]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[11]),
	array("label"=>"Adequado", "y"=>$adequado[11]),
	array("label"=>"Excelente", "y"=>$excelente[11]),
);
$h12 = array(
	array("label"=>"Não Fez", "y"=>$nfez[12]),
	array("label"=>"Insuficiente", "y"=>$insuficiente[12]),
	array("label"=>"Adequado", "y"=>$adequado[12]),
	array("label"=>"Excelente", "y"=>$excelente[12]),
);


?>
<script>
window.onload = function() {


var chart1 = new CanvasJS.Chart("graficoh1", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 1"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();
var chart2 = new CanvasJS.Chart("graficoh2", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 2"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

var chart3 = new CanvasJS.Chart("graficoh3", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 3"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h3, JSON_NUMERIC_CHECK); ?>
	}]
});
chart3.render();

var chart4 = new CanvasJS.Chart("graficoh4", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 4"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h4, JSON_NUMERIC_CHECK); ?>
	}]
});
chart4.render();
var chart5 = new CanvasJS.Chart("graficoh5", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 5"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h5, JSON_NUMERIC_CHECK); ?>
	}]
});
chart5.render();
var chart6 = new CanvasJS.Chart("graficoh6", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 6"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h6, JSON_NUMERIC_CHECK); ?>
	}]
});
chart6.render();
var chart7 = new CanvasJS.Chart("graficoh7", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 7"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h7, JSON_NUMERIC_CHECK); ?>
	}]
});
chart7.render();
var chart8 = new CanvasJS.Chart("graficoh8", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 8"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h8, JSON_NUMERIC_CHECK); ?>
	}]
});
chart8.render();
var chart9 = new CanvasJS.Chart("graficoh9", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 9"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h9, JSON_NUMERIC_CHECK); ?>
	}]
});
chart9.render();
var chart10 = new CanvasJS.Chart("graficoh10", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 10"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h10, JSON_NUMERIC_CHECK); ?>
	}]
});
chart10.render();
var chart11 = new CanvasJS.Chart("graficoh11", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 11"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h11, JSON_NUMERIC_CHECK); ?>
	}]
});
chart11.render();
var chart12 = new CanvasJS.Chart("graficoh12", {
	animationEnabled: true,
	title: {
		text: "Notas na habilidade 12"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($h12, JSON_NUMERIC_CHECK); ?>
	}]
});
chart12.render();
var chart13 = new CanvasJS.Chart("graficoc1", {
	animationEnabled: true,
	title: {
		text: "Notas na Competência 1"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($c1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart13.render();
var chart14 = new CanvasJS.Chart("graficoc2", {
	animationEnabled: true,
	title: {
		text: "Notas na Competência 2"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($c2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart14.render();
var chart15 = new CanvasJS.Chart("graficoc3", {
	animationEnabled: true,
	title: {
		text: "Notas na Competência 3"
	},

	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($c3, JSON_NUMERIC_CHECK); ?>
	}]
});
chart15.render();



}
</script>





@stop

@section('cabecalho')
  <h3>Alunos Cadastrados:</h3>
  <a class="btn btn-outline-primary" href="{{ action('AlunoController@cadastrar', $alunos->turma_id)}}">Cadastrar aluno</a>
@stop


@section('listagem')

<table class='table'>
<tr>
  <th>Nome</th>
  <th>Número</th>
  <th>Matrícula</th>
  <th>Turma</th>
  <th>Email</th>
  <th>Contato</th>
  <th>Contato dos Responsáveis</th>
  <th>Ações</th>
</tr>

  @foreach($alunos as $item)
<tr>
    <td>{{$item->nome}}</td>
    <td>{{$item->numero}}</td>
    <td>{{$item->matricula}}</td>
    <td>{{$item->turma}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->contato}}</td>
    <td>{{$item->contato_responsaveis}}</td>
    <td>
      <a class="btn btn-primary btn-sm mt-1" href="{{ action('AlunoController@editar', $item->id) }}">Editar</a>
      <a class="btn btn-primary btn-sm mt-1" onclick=" return confirm('Remover aluno?');" href="{{ action('AlunoController@deletar', $item->id) }}">Excluir</a>
      <a class="btn btn-primary btn-sm mt-1" href="{{ action('AvaliacaoController@cadastrar', $item->id) }}">Avaliar</a>
      <a class="btn btn-primary btn-sm mt-1" href="{{ action('AvaliacaoController@listar', $item->id) }}">Ver notas</a>
    </td>
</tr>
  @endforeach

</table>
<div id="graficoc1" style="height: 200px; width: 30%;"></div>
<div id="graficoc2" style="height: 200px; width: 30%;"></div>
<div id="graficoc3" style="height: 200px; width: 30%;"></div>
<div id="graficoh1" style="height: 200px; width: 30%;"></div>
<div id="graficoh2" style="height: 200px; width: 30%;"></div>
<div id="graficoh3" style="height: 200px; width: 30%;"></div>
<div id="graficoh4" style="height: 200px; width: 30%;"></div>
<div id="graficoh5" style="height: 200px; width: 30%;"></div>
<div id="graficoh6" style="height: 200px; width: 30%;"></div>
<div id="graficoh7" style="height: 200px; width: 30%;"></div>
<div id="graficoh8" style="height: 200px; width: 30%;"></div>
<div id="graficoh9" style="height: 200px; width: 30%;"></div>
<div id="graficoh10" style="height: 200px; width: 30%;"></div>
<div id="graficoh11" style="height: 200px; width: 30%;"></div>
<div id="graficoh12" style="height: 200px; width: 30%;"></div>
@stop
