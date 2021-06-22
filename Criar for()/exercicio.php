<?php

echo "<pre>";

$inicio = $_GET["inicial"];
$fim = $_GET["final2"];
var_dump($inicio);
var_dump($fim);

function conta($inicio, $fim){
	for ($i= $inicio; $i <= $fim ; $i++) { 
		$numeros[] = rand();
	}
	var_dump($numeros);

	foreach ($numeros as $key => $value) {
		pares($value);
	}
}
conta($inicio, $fim);



function pares($imparpar){
	
	if ($imparpar % 2 == 0) {
		echo "O número $imparpar é par";
		echo "<br>";
	}else {

			echo "O número $imparpar é impar";
					echo "<br>";

		}

}







?>