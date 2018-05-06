<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Constantes</title>

</head>

<body>

<?php

	/*
	for($i=0;$i<=20;$i+=2){

		echo "<p> Hemos entrado en el bucle </p>";

		if($i==6) {

			echo "Hola pepsicola 6";

			break;
		}

	} */

	for($i=10;$i>=-10;$i--){

		if($i==0) {
			echo "Division por 0 no es posible <br>";

			continue;
		}

		echo " 9 / $i = " . 9/$i . "<br>";
	} 

	echo "Byee";


?>

</body>
</html>