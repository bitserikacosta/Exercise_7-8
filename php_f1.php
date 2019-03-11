<?php
	$strings = array (
		" Lorem ipsum dolor sit amet, consectetur EnTrenamiento elit, sed do eiusmod tempor incididunt ut",
		"Sed ut ENTRENAMIENTO unde omnis iste natus error sit voluptatem accusantium doloremque entrenamiento, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae ENTrenamiento dicta sunt explicabo. ",
		"Phasellus laoreet eu entrenamiento orci et tincidunt. Quisque ac drupal gravida sem, non eleifend erat EntreNAMiento."
	);
#Calcula e imprime el número de caracteres de cada cadena. Imprime también el total de caracteres
#Calcula e imprime el número de espacios de cada cadena. Imprime también el total de espacios.
$Sentence = strlen ($strings[0]) - substr_count($strings[0], ' ');
echo "La cantidad de caracteres de la 1ra oracion es: " .  $Sentence . " caracteres <br>";
echo "La cantidad de espacios de la 1ra cadena es: " . substr_count($strings[0], ' ');
echo "<br>";
$Sentence1 = strlen ($strings[1]) - substr_count($strings[1], ' ');
echo "La cantidad de caracteres de la 2da oracion es: " .  $Sentence1 . " caracteres <br>";
echo "La cantidad de espacios de la 2da cadena es: " . substr_count($strings[1], ' ');
echo "<br>";
$Sentence2 = strlen ($strings[2]) - substr_count($strings[2], ' ');
echo "La cantidad de caracteres de la 3ra oracion es: " .  $Sentence2 . " caracteres <br>";
echo "La cantidad de espacios de la 3ra cadena es: " . substr_count($strings[2], ' ');
echo "<br>";
$CharactersAmount =  $Sentence + $Sentence1 + $Sentence2;
echo "La longitud total de caracteres es: " . $CharactersAmount . "<br>";
$WhiteSpacesAmount =  substr_count($strings[0], ' ') + substr_count($strings[1], ' ') + substr_count($strings[2], ' ');
echo "La longitud total de espacios en blanco es: " . $WhiteSpacesAmount;
#Sustituye todas las variantes de Entrenamiento (ENTRENAMIENTO, ENtrenamiento, EnTrEnAmiento, etc.) por Entrenamiento.
$searchVal = array("EnTrenamiento", "ENTRENAMIENTO", "entrenamiento", "EntreNAMiento", "ENTrenamiento");
$replaceVal = array("Entrenamiento", "Entrenamiento", "Entrenamiento", "Entrenamiento", "Entrenamiento"); 
$res = str_replace($searchVal, $replaceVal, $strings); 
echo "<ul><li>" . implode("</li><li>", $res) . "</li></ul>";
#Calcula e imprime el número de veces que aparece la palabra Entrenamiento en cada cadena. Imprime también el total.
echo substr_count(($res[0]), "Entrenamiento"); 
echo " ocasison(es) esta Entrenamiento en string 1.<br>";
echo substr_count(($res[1]), "Entrenamiento"); 
echo " ocasison(es) esta Entrenamiento en string 2.<br>";
echo substr_count(($res[2]), "Entrenamiento"); 
echo " ocasison(es) esta Entrenamiento en string 3.<br>";

echo substr_count(($res[0]), "Entrenamiento") + substr_count(($res[1]), "Entrenamiento") + substr_count(($res[2]), "Entrenamiento");
echo " veces esta Entrenamiento en el array: ";
#Reemplaza la palabra Entrenamiento por "<strong>Entrenamiento</strong>", de forma que se muestre en negrita.
$terms = array('Entrenamiento');
$result['boldWord'] = $res[0];
foreach ($terms as $term) {
	if (trim($term) === '') continue;
	$result['boldWord'] = str_ireplace($term, "<strong>$term</strong>", $result['boldWord']);
}
echo $result['boldWord'];
$terms = array('Entrenamiento');
$result['boldWord'] = $res[1];
foreach ($terms as $term) {
	if (trim($term) === '') continue;
	$result['boldWord'] = str_ireplace($term, "<strong>$term</strong>", $result['boldWord']);
}
echo "<br>";
echo $result['boldWord'];
$terms = array('Entrenamiento');
$result['boldWord'] = $res[2];
foreach ($terms as $term) {
	if (trim($term) === '') continue;
	$result['boldWord'] = str_ireplace($term, "<strong>$term</strong>", $result['boldWord']);
}
echo "<br>";
echo $result['boldWord'];
#Recorta todas las cadenas a 100 caracteres (quédate con los primeros 100 caracteres).
#Por último, imprime las cadenas resultantes, separadas por un salto de línea HTML (<br>)
class TrimSentence {
	public function __toString() {
		return "TrimSentence";
	}
}
echo "<br><br>";
echo var_export(substr($res[0], 0, 100), true).PHP_EOL;
echo "<br>";
echo var_export(substr($res[1], 0, 100), true).PHP_EOL;
echo "<br>";
echo var_export(substr($res[2], 0, 100), true).PHP_EOL;
?>