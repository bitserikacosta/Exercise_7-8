<?php
	/**
 * Class and Function List:
 * Function list:
 * - countingCharacters()
 * - replace()
 * - wordCounting()
 * Classes list:
 */
	$strings = [" Lorem ipsum dolor sit amet, consectetur EnTrenamiento elit, sed do eiusmod tempor incididunt ut", "Sed ut ENTRENAMIENTO unde omnis iste natus error sit voluptatem accusantium doloremque entrenamiento, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae ENTrenamiento dicta sunt explicabo. ", "Phasellus laoreet eu entrenamiento orci et tincidunt. Quisque ac drupal gravida sem, non eleifend erat EntreNAMiento."];
// número de caracteres de cada cadena. también el total de caracteres
// número de espacios de cada cadena. también el total de espacios
function countingCharacters($strings)
{
	$sentenceLine = 0;
	$charactersAmount = 0;
	$whiteSpacesAmount = 0;
	$timesWord = 0;
	$terms = 0;
	foreach ($strings as $eachSentence)
	{
		$sentenceLine++;
		//Elimina posibles espacios al principio y final de cada cadena.
		ltrim($eachSentence," ");
		rtrim($eachSentence," ");
		echo "La oración numero $sentenceLine tiene " . strlen($eachSentence) . " caracteres de longitud<br />";
		echo "<strong>La oración numero $sentenceLine tiene " . preg_match_all('/[ ]/i', $eachSentence, $matches) . " espacios en blanco</strong><br />";
		$charactersAmount += strlen($eachSentence);
		$whiteSpacesAmount += preg_match_all('/[ ]/i', $eachSentence, $matches);
	}
	echo "Las oraciones en conjunto tienen " . $charactersAmount . " caracteres<br />";
	echo "<strong>Las oraciones en conjunto tienen " . $whiteSpacesAmount . " espacios en blanco</strong><br /><br />";
}
// Cambiar las variantes de Entrenamiento(ENTRENAMIENTO, ENtrenamiento, EnTrEnAmiento, etc.) por Entrenamiento
function replace($strings)
{
	$wordToReplace = 0;
	foreach ($strings as $Value)
	{
		$searchValue = array(
			"EnTrenamiento",
			"ENTRENAMIENTO",
			"entrenamiento",
			"EntreNAMiento",
			"ENTrenamiento"
		);
		// Reemplaza la palabra Entrenamiento por "<strong>Entrenamiento</strong>", de forma que se muestre en negrita
		$replaceValue = str_replace($searchValue, "<strong>Entrenamiento.</strong>", $Value);
		$strings[$wordToReplace] = $replaceValue;
		echo "<ul><li>" . $strings[$wordToReplace] . "</li></ul>";
		$wordToReplace++;
		// Recorta todas las cadenas a 100 caracteres (quédate con los primeros 100 caracteres).
		// imprime las cadenas resultantes, separadas por un salto de línea HTML (<br />).
		$max_char = 100;
		echo @substr($strings[$wordToReplace], 0, $max_char) . "<br />";
	}
	return $strings;
}
// el número de veces que aparece la palabra Entrenamiento en cada cadena. también el total
function wordCounting($strings)
{
	$texto = 0;
	$word = replace($strings);
	$wordToReplace = 0;
	foreach ($word as $Value)
	{
		$wordToReplace++;
		$replacing = (substr_count($Value, "Entrenamiento") == 1) ? " " : " ";
		echo "oración $wordToReplace tiene " . substr_count($Value, "Entrenamiento") . " " . $replacing . " Entrenamiento<br />";
		$texto += substr_count($Value, "Entrenamiento");
	}
	echo "El total de Entrenamiento son " . $texto . " ";
	return $word;
}
countingCharacters($strings);
$word = wordCounting($strings);
?>
