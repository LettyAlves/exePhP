<!DOCTYPE html>
<html>
<head>
	<title>exercicio 4 </title>
	<meta charset="utf-8">
</head>
<body>
<h1> Exercício 4 </h1>
<?php 
	$numeros_a = array(1,2,3,4,5,6,7,8,9,10);
	$numeros_b = array(1,2,3,4,5,6,7,8,9,10);

	for ($i=0; $i < 10; $i++) { 
		echo $numeros_a[$i]." X ". $numeros_b[$i]. " = ". $numeros_a[$i] * $numeros_b[$i]."</br>";
	}
	?>
</body>
</html>