<?php
	echo "<h1>Aqui estão os resultados:</h1>";

	echo "<pre>";
	var_dump($_GET);
	
	$a = $_GET["Entrada1"];
	$b = $_GET["Entrada2"];
	$c = $_GET["Entrada3"];


	function delta($a, $b, $c){
		$delta = (pow($b,2)) - 4 * $a * $c;
		return $delta;
	};
	$delta = delta($_GET["Entrada1"], $_GET["Entrada2"], $_GET["Entrada3"]);
	
	
	function x1($a, $b, $delta){
		$x1 = (-$b + sqrt($delta)) / (2 * $a);
		return $x1;
	};
	


	function x2($a, $b, $delta){
		$x2 = (-$b - sqrt($delta)) / (2 * $a);
		return $x2;
	};
	


	$resultados = array();
	
	$resultados["delta"] = delta($_GET["Entrada1"], $_GET["Entrada2"], $_GET["Entrada3"]);
	$resultados["x1"] = x1($_GET["Entrada1"], $_GET["Entrada2"], $delta);
	$resultados["x2"] = x2($_GET["Entrada1"], $_GET["Entrada2"], $delta);

	echo "<pre>";
	var_dump($resultados);



?>