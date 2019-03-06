<?php

function calculadora($num1, $num2, $operacion) {
    switch ($operacion) {
        case "+";
            $Resultado = $num1 + $num2;
            echo $num1 . " + " . $num2 . " = $Resultado<br>";
            break;
			
        case "-";
            $Resultado = $num1 - $num2;
            echo $num1 . " - " . $num2 . " = $Resultado<br>";
            break;
			
        case "*";
            $Resultado = $num1 * $num2;
            echo $num1 . " * " . $num2 . " = $Resultado<br>";
            break;
			
        case "/";
           if ($num2 == 0) {
			  
                echo $num1 . " / " . $num2 . " = ERROR0<br><br>";
            } else {
                $Resultado = $num1 / $num2;
                echo $num1 . " / " . $num2 . " = $Resultado<br><br>";
            }
            break;
    }
}
?>
