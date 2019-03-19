<?php
$countries = [ 'uk' => 'United Kingdom', 'fr' => 'France', 'pt' => 'Portugal', 've' => 'Venezuela', 'at' => 'Austria', 'es' => 'Spain', 'co' => 'Colombia' ];

//Comprueba si tu país está en la lista. Si está, imprime la cadena "Mi país de origen es X y está en la lista". Si no está, imprime la cadena: "Mi país de origen es X pero no está en la lista". Sustituye X por el nombre de tu país.
$myCountry = "Colombia";
if (in_array("$myCountry", $countries)) {
    echo "Mi país de origen es " . $myCountry . " y está en la lista <hr>";
} else {
    echo "Mi país de origen es " . $myCountry . " pero no está en la lista <hr>";
}

//Ordena el array en orden alfabético según el nombre del país (y sin perder la relación de claves)
asort($countries);
foreach ($countries as $x => $x_value) {
    echo $x . " -> " . $x_value;
    echo "<br>";
}
echo "<hr>";

//Imprime el array con print_r().
print_r($countries);

echo "<hr>";
//Crea e imprime una cadena a partir del array, separando los nombres de países por ", " (coma y espacio).
$comma_list =  implode(", ", $countries);
echo $comma_list;
?>
