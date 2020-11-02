@extends('layout')

@section('titulo', 'Notas por Habilidade')

@section('cabecalho')

<h2 style="margin-bottom:30px">Notas de <?php echo "$prova->aluno" ?>:</h2>
@stop

@section('listagem')
<?php
function qualitivar($nota){
  if ($nota >= 0 && $nota < 3 && is_numeric($nota)) {
    echo '<td class="text-danger">Não fez</td>';
  } elseif ($nota >= 3 && $nota < 7 && is_numeric($nota)) {
    echo '<td class="text-warning">Insuficiente</td>';
  } elseif ($nota >= 7 && $nota < 10 && is_numeric($nota)) {
    echo '<td class="text-primary">Adequado</td>';
  }elseif ($nota == 10 && is_numeric($nota)){
    echo '<td class="text-success">Excelente</td>';
  }else{
    echo '<td class="text-secondary">Não se aplica</td>';
  }
}
 ?>

 <table class="table table-dark">
   <tr class="bg-primary text-white" >
     <th colspan="5">
   <h3>Delineamento do problema</h3>
 </th>
   <tr>
     <th>Habilidade 1</th>
     <?php qualitivar($prova->habilidade1); ?>
   </tr>
   <tr>
     <th>Habilidade 2</th>
     <?php qualitivar($prova->habilidade2); ?>
   </tr>
   <tr>
     <th>Habilidade 3</th>
     <?php qualitivar($prova->habilidade3); ?>
   </tr>
   <tr>
     <th>Habilidade 4</th>
     <?php qualitivar($prova->habilidade4); ?>
   </tr>
   <tr>
     <th>Habilidade 5</th>
     <?php qualitivar($prova->habilidade5); ?>
   </tr>
   <tr class="bg-primary text-white" >
     <th colspan="5">
   <h3>Delineamento do problema</h3>
 </th>
   <tr>
     <th>Habilidade 6</th>
     <?php qualitivar($prova->habilidade6); ?>
   </tr>
   <tr>
     <th>Habilidade 7</th>
     <?php qualitivar($prova->habilidade7); ?>
   </tr>
   <tr>
     <th>Habilidade 8</th>
     <?php qualitivar($prova->habilidade8); ?>
   </tr>
   <tr>
     <th>Habilidade 9</th>
     <?php qualitivar($prova->habilidade9); ?>
   </tr>
   <tr class="bg-primary text-white" >
     <th colspan="5">
   <h3>Delineamento do problema</h3>
 </th>
   <tr>
     <th>Habilidade 10</th>
     <?php qualitivar($prova->habilidade10); ?>
   </tr>
   <tr>
     <th>Habilidade 11</th>
     <?php qualitivar($prova->habilidade11); ?>
   </tr>
   <tr>
     <th>Habilidade 12</th>
     <?php qualitivar($prova->habilidade12); ?>
   </tr>
 </table>

@stop
