<?php
$dates = array(
    array('day' => 3, 'month' => 12, 'year' => 2005),
    array('day' => 30, 'month' => 2, 'year' => 2017),
    array('day' => 1, 'month' => 11, 'year' => 2014)

);
//Añade una nueva entrada al array con la fecha actual, en (day, month, year) como en timestamp. La fecha actual se tiene que obtener dinámicamente.
$dates[] = array('day'=>date("d"), 'month'=>date("m"), 'year'=>date("Y"));

$numbers = date("d/m/Y");
$array =  explode(",", $numbers);
$toUnset= 0;
//Recorre el array y comprueba si cada fecha es válida. Si encuentras una fecha no válida, elimínala del array (unset())
foreach ($dates as $key) {
    if (count($key) == 3) {
        if (checkdate($key['month'], $key['day'], $key['year']) == true) {
            $DateValues = strtotime(implode(".", $key));
            //Para cada elemento del array, añade un nuevo índice 'timestamp', y asígnale el valor de cada fecha en formato timestamp.
            $dates[$toUnset]['Timestamp: '] = $DateValues;
        } else {
            unset($dates[$toUnset]);
        }
    }
    $toUnset++;
}
//Imprime el array resultante con print_r().
print_r($dates);

?>
