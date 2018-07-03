<!DOCTYPE html>
<html>
<head>
	<title>exercicio 2 </title>
	<meta charset="utf-8">
</head>
<body>
<h1> Exercício 2 </h1>
<?php 
	$num = array(1,2,3,4,5,6,7,8,9,10);
	$numNegativos = 0;
	$numPositivos = 0;
	$numPares = 0;
	$numImpar = 0;

	for ($i=0; $i < 10; $i++) { 
		if ($num[$i] < 0) {
			$numNegativos++;
		}
	}
    for ($i=0; $i < 10; $i++) { 
		if ($num[$i] > 0) {
			$numPositivos++;
		}
	}
	for ($i=0; $i < 10; $i++) { 
		if ($num[$i] % 2 == 0) {
			$numPares++;
		}else{
			$numImpar++;
		}
	}
	echo "Números negativos são: ".$numerosNegativos."</br>";
	echo "Números positivos são: ".$numerosPositivos."</br>";
	echo "Números impar são: ".$numerosImpar."</br>";
	echo "Números pares são: ".$numerosPares."</br>";
	?>
</body>
</html>