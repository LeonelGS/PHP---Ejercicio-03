<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trabajo Practico N° 2</title> 
  </head>    
 <?php 
  $numero_de_pies = $_GET ["pies"]; 
  $yarda = round($numero_de_pies / 3,2);
  $pulgada = round($numero_de_pies * 12,2);
  $convertir_cm = round(12*2.54,2);
  $cm = round($numero_de_pies * $convertir_cm,2);
  $convertir_metro = round($convertir_cm / 100, 2);
  $metro = round($numero_de_pies * $convertir_metro,2);
  if($numero_de_pies < 0){
    echo " No es posible hacer el calculo con numero negativo.";
   }  else {
   echo "<b>Resolucion de Ejercicio N 19</b><br>";
   echo "<br>";
   echo " De acuerdo con el numero de pies ingresado, estas serian sus equivalencias para cantidad de pies: $numero_de_pies";
   echo "<br>";
   echo "$yarda yardas.";
   echo "<br>";
   echo "$pulgada pulgadas.";
   echo "<br>";
   echo "$cm centimetros.";
   echo "<br>";
   echo "$metro metros.";
   }
   
 ?>
<html>