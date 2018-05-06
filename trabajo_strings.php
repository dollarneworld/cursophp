<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.resaltar {
			color:#F00;
			font-weight: bold;
		}
	</style>
</head>
<body>

<?php
	/* comillas hijas distintas que las comillas padres " ' ' "  o ' " " ' o \ " " " " \ */

	$nombre="Jordi";

	echo "Hola $nombre";

	echo "<p class=\"resaltar\">Párrafo resaltado</p>";


	/*comparar string strcmp strcasecmp si las string coincides devuelve un 0*/

	$variable1="Casa";
	$variable2="CASA";
	
	$resultado=strcmp($variable1,$variable2);
	
	$resultado2=strcasecmp($variable1,$variable2);


	if (!$resultado) {
    echo "Coinciden";
} else {
    echo "No coinciden!";
}



	echo "<br>El resultado es " . $resultado;
	echo "<br> El resultado es " . $resultado2;



?>
	
</body>
</html>
