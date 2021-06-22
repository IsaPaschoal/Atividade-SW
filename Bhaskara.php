<!DOCTYPE html>
<html>
<head>
	<title> Exercício </title>
</head>
<body>

	<?php
		error_reporting(E_ALL);


	 echo "•*´¨`*~ஜ◦•◦✿◦• FÓRMULA DE BHASKARA ~*´¨`*•.¸¸.•*";
 	 echo "<hr>";
	 echo "<br>";



	 echo "Letra A:";
	 echo "<br>";
	 $letraA = 3;
	 echo $letraA;

	 echo "<hr>";


	 echo "Letra B:";
	 echo "<br>";
	 $letraB = 15;
	 echo $letraB;

	 echo "<hr>";


	 echo "Letra C:";
	 echo "<br>";
	 $letraC = 12;
	 echo $letraC;

	 echo "<hr>";


	 echo "Resultado do delta:";
	 $delta = $letraB ** 2 - 4 * $letraA * $letraC;
	 echo "<br>";
	 echo $delta;


	 echo "<hr>";

	 echo "Resultado solução X1";
	 $expressão1 = ($letraB + sqrt($delta)) / (2 * $letraA);
	 echo "<br>";
	 echo $expressão1;


	 echo "<hr>";
	 echo "Resultado solução X2";
	 $expressão2 = ($letraB - sqrt($delta)) / (2 * $letraA);
	 echo "<br>";
	 echo $expressão2;




	 ?>
</body>
</html>
