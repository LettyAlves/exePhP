<!DOCTYPE html>
<html>
<head>
	<title>exercicio 7 </title>
	<meta charset="utf-8">
</head>
<body>
<h1> Exercício 7 </h1><?php 
	$pessoas = array(
					array('Luiza','Monguagua',16,'F')
					array('Pedro','Praia grande',16,'M'),
					array('Julia','Cubatão',15,'F'),
					array('Julio','Guaruja',21,'M'),
					array('Guilherme','Itanhaém',19,'M'),
					array('Gabriel','Santos',17,'M'),
					array('Cristiano','Guaruja',18,'M'),
					array('Alisson','Santos',13,'M'),
					array('Yasmin','São Vicente',12,'F'),
					array('Lucas','Santos',10,'M'),
				);
	$NumM = 0;
    echo "Nome de todas as pessoas <br>";
	for ($i=0; $i < 10; $i++) { 

       echo "Nome: ".$pessoas[$i][0]."<br>";
       echo "Idade: ".$pessoas[$i][2]."<br>"."<br>"; }
	   echo "Nome de todas as pessoas que moram em Santos <br>";
	     for ($i=0; $i < 10; $i++) { 
	     if ($pessoas[$i][1] == "santos") {
			echo "Nome: ".$pessoas[$i][0]."<br>"."<br>";}
		}

	echo "Todos maiores de 18 anos<br>";
	for ($i=0; $i < 10; $i++) { 
		if ($pessoas[$i][2] > 18) {
			echo "Nome: ".$pessoas[$i][0]."<br>"."<br>";}
	}
	for ($i=0; $i < 10; $i++) { 
		if ($pessoas[$i][3] == "M") {
			$NumM++;
		}
	}
       echo "Número de homens = ".$NumM;
	?>
</body>
</html>