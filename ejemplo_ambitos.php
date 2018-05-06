<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

	$nombre="Jordi";


	function dameNombre() {

		global $nombre;

		$nombre="El nombre es " . $nombre;

	}

	dameNombre();

	echo $nombre;
	
	
?>
	
</body>
</html>
