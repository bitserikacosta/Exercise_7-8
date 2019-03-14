<?php 

function parsingNumbers($numbers, $arraySize)
{
    $Pares = 0;
    $Impares = 0;

    for ($i = 0 ; $i < $arraySize ; $i++) {
        if ($numbers[$i] & 1 == 1) {
            $Impares ++ ;
        } else {
            $Pares ++ ;
        }
    }
	//Imprime el número de elementos del array.
    echo "Hay " . count($numbers) . " Valores en el array.<br>";
	//Cuenta e imprime el número de elementos pares y de elementos impares.
    echo "Pares hay: " , $Pares, "<br> " ,"  Impares hay: " , $Impares , "<hr>";
    sort($numbers);
}
$numbers = array(3, 45, 22, 12, 33, 23, 44, 1, 121);
$valuesCount = count($numbers);
//Ordena los elementos del array en orden ascendente
parsingNumbers($numbers, $valuesCount);
sort($numbers);
$valuesPrint = count($numbers);
for ($x = 0; $x < $valuesPrint; $x++) {
    echo "<li>" . $numbers[$x] . "</li>";
 
}
echo "<hr>";
//Crea un array llamado $morenumbers, a partir de "5:76:7:8". Usa las funciones de arrays para convertir la cadena en un array de números.
$morenumbers = "5:76:7:8";
$array =  explode(":", $morenumbers);
foreach ($array as $key => $Numero) {
  echo "<li>$key => $Numero</li>" .  PHP_EOL;
}
echo "<hr>";
//Combina los dos arrays, de forma que $numbers quede en primer lugar. Almacena el resultado en el array $numbers.
$numbers = array_merge($numbers, $array =  explode(":", $morenumbers));
//Ordena los elementos del array en orden descendente.
rsort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo "<li>" . $numbers[$x] . "</li>";
}
//Por último, imprime el array $numbers resultante utilizando print_r().
echo "<hr>";
print_r($numbers);