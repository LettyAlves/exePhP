<!DOCTYPE html>
<html>
<head>
	<title>exercicio 1 </title>
	<meta charset="utf-8">
</head>
<body>
<h1> Exercício 1 </h1>
<?php 
	$classe = array(0 => 'Alanis' , 1 => 'Geovanna' , 2 => 'Sara' , 3 => 'Letícia' , 4 => 'Amanda' , 5 => 'Andressa' , 6 => 'Juliana' , 7 => 'Yuri' , 8 => 'Nichollas' , 9 => 'Lucas');
	$media = 0;

	for ($i=0; $i < 10; $i++) { 
		$media += $classe[$i][1];
	}

	$media = $media/10;
	echo " A média geral da sala é : ".$media."</br>";
	 $maior = $classe[0][1];
        for ($i=0; $i < 10; $i++) { 
		if ($maior < $classe[$i][1]) {
			$maior = $classe[$i][1];
		}
	}
echo "maior nota da sala foi = ".$maior."</br>";
?>
</body>
</html>
