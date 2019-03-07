<?php
	function calculadora($num1, $num2, $operacion)
{
	switch ($operacion) {
		case '+':
			$resultado = $num1 + $num2;
			echo $num1 . ' + ' . $num2 . " = $resultado<br>";
			break;

		case '-':
			$resultado = $num1 - $num2;
			echo $num1 . ' - ' . $num2 . " = $resultado<br>";
			break;

		case '*':
			$resultado = $num1 * $num2;
			echo $num1 . ' * ' . $num2 . " = $resultado<br>";
			break;

		case '/':
			if ($num2 == 0) {
				echo $num1 . ' / ' . $num2 . " = ERROR0<br><br>";
			} else {
				$resultado = $num1 / $num2;
				echo $num1 . " / " . $num2 . " = $resultado<br><br>";
			}
	}
}
?>