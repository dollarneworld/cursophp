<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>arrays</title>

</head>

<body>

<?php

/*

	$semana[]="Lunes";
	$semana[]="Martes";
	$semana[]="Miércoles";


*/


	$alimentos=array("fruta"=>array("tropical"=>"kiwi",
									"cítrico"=>"mandarina",
									"otros"=>"manzana"),
					 "leche"=>array("animal"=>"vaca",
									 "vegetal"=>"avena"),
					 "carne"=>array("vacuno"=>"lomo",
									"porcino"=>"pata"));

// MOSTRAMOS EL PRIMER ARRAY


	foreach ($alimentos as $clave_alim=>$alim){

		echo "$clave_alim:<br>";


// MOSTRAMOS EL SEGUNDO ARRAY 
		
		while(list($clave1,$valor1)=each($alim)) {

			echo "$clave1=$valor1<br>";

		}

		echo "<br>";
	}


echo var_dump($alimentos);


		echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

	$sem[]="l";
	$sem[]="s";
	$sem[]="r";
	$sem[]="t";
	
	for($i=0;$i<count($sem);$i++) {

		echo $sem[$i] . "<br>";
	}

	$sem[]="Viernes";

	for($i=0;$i<count($sem);$i++) {

		echo $sem[$i] . "<br>";
	}

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";


	$semana=array("Lunes","Martes","Miércoles", "Jueves");

	sort($semana);

	for($i=0;$i<count($semana);$i++) {

		echo $semana[$i] . "<br>";
	}



	$datos=array("Nombre"=>"Jordi","Apellido"=>"Martí","Edad"=>21);

	$datos["País"]="España";

	// echo $datos["Apellido"];

	echo "<br>";

	foreach($datos as $array=>$valor) {

	echo "A $array le corresponde $valor <br>";
	
	}

	echo "<br>";

	if(is_array($datos)){

		echo "Es un Array";

	}else {
		echo "No es un array";
	}

?>

</body>
</html>