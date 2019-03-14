<?php
$strings = [" Lorem ipsum dolor sit amet, consectetur EnTrenamiento elit, sed do eiusmod tempor incididunt ut", "Sed ut ENTRENAMIENTO unde omnis iste natus error sit voluptatem accusantium doloremque entrenamiento, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae ENTrenamiento dicta sunt explicabo. ", "Phasellus laoreet eu entrenamiento orci et tincidunt. Quisque ac drupal gravida sem, non eleifend erat EntreNAMiento."];
function countingCharacters($strings)
{
    $sentenceLine = 0;
    $charactersAmount = 0;
    $whiteSpacesAmount = 0;
    foreach ($strings as $eachSentence) {
        $sentenceLine++;
        //Elimina posibles espacios al principio y final de cada cadena.
        ltrim($eachSentence, " ");
        rtrim($eachSentence, " ");
        echo "<li>Oración $sentenceLine tiene " . strlen($eachSentence) . " caracteres</li>";
        echo "<li>Oración $sentenceLine tiene " . preg_match_all('/[ ]/i', $eachSentence, $matches) . " espacios</li>";
        $charactersAmount += strlen($eachSentence);
        $whiteSpacesAmount += preg_match_all('/[ ]/i', $eachSentence, $matches);
    }
    echo "<li>Las oraciones tienen " . $charactersAmount . " caracteres</li>";
    echo "<li>Las oraciones tienen " . $whiteSpacesAmount . " espacios<br><br>";
    return $strings;
}


function replace($strings)
{
    foreach ($strings as $ValueReplaced) {
        $searchValue = array("EnTrenamiento", "ENTRENAMIENTO", "entrenamiento", "EntreNAMiento", "ENTrenamiento");
        $replacedWord = str_replace($searchValue, "<strong>Entrenamiento</strong>", $ValueReplaced, $c);
        $max_char = 100;
        echo "Hay " . $c . " Entrenamiento";
        echo "<ul><li>" . @substr($replacedWord, 0, $max_char) . "</ul></li>";
        echo "<ul><li>" . $replacedWord . "</ul></li><hr>";
    }
    return $strings;
}


function wordCounting($strings)
{
    $word = replace($strings);
    foreach ($word as $Value) {
        $EntrenamientoFound += preg_match_all('/Entrenamiento/i', $Value, $matches);
    }
    echo "<li>Las oraciones tienen " . $EntrenamientoFound . " Entrenamiento<br><br>";
    return $word;
}

countingCharacters($strings);
$word = wordCounting($strings);
?>
