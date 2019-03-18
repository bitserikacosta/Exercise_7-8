<?php
$countries = [ 'uk' => 'United Kingdom', 'fr' => 'France', 'pt' => 'Portugal', 've' => 'Venezuela', 'at' => 'Austria', 'es' => 'Spain', 'co' => 'Colombia' ];

$myCountry = "Colombia";
if (in_array("$myCountry", $countries)) 
{ 
echo "Mi país de origen es " . $myCountry . " y está en la lista <hr>"; 
} 
else
{ 
echo "Mi país de origen es " . $myCountry . " pero no está en la lista <hr>"; 
} 

asort($countries);

foreach($countries as $x => $x_value) {
    echo $x . " -> " . $x_value;
    echo "<br>";
}
echo "<hr>";
print_r($countries);
echo "<hr>";
$comma_list =  implode(", ", $countries);
echo $comma_list;
