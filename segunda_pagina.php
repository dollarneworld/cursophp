<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

	/*

	print "Bienvenidos al curso de PHP <br>";  // prints
	print "hola alumnos <br>";
	print "hasta el próximo vídeo";

	*/


	/* VARIABLES */ 

	// " " <- variables
	// ' ' <- litreal

	/* echo & print */ 

	$nombre="Juan";
	$edad=18;
	echo "El nombre de usuario $nombre <br>";

	/* condicionales */

?>

<?php
	
	/* include y require es lo mismo, pero include sigue ejecutando el programa aunq la funcion no exista */
	include ("dame_datos.php");

	dame_datos();
	
	
?>
	
</body>
</html>
