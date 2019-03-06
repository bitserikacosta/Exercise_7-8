<?php
include "php7.php";

$numeros = array(
  array(
    "num1" => 41,
    "num2" => 2.1
  ),
  
  array(
    "num1" => 3,
    "num2" => 67
  ),
  
 array(
    "num1" => 145,
    "num2" => 0
  ),
  
   array(
    "num1" => 666,
    "num2" => 333
  )
    
);
$operaciones = array( "Sumar" => "+", "Restar" => "-", "Multiplicar" => "*", "Dividir" => "/" );

foreach ($numeros as $factores) {
       foreach ($operaciones as $simbolo) {

     calculadora($factores["num1"], $factores["num2"], $simbolo);

    }
}

?>
