<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");

	// Compra_vehiculo::$ayuda=10000;

	Compra_vehiculo::descuento();
	
	$compra_Antonio=new Compra_vehiculo("compacto");

	$compra_Antonio->Climatizador();

	$compra_Antonio->tapiceria_cuero("blanco");

	echo $compra_Antonio->precio_final();

	echo "<br>";

	$compra_Ana=new Compra_vehiculo("compacto");

	$compra_Ana->Climatizador();

	$compra_Ana->tapiceria_cuero("rojo");

	echo $compra_Ana->precio_final();
	
	
	
	


?>
</body>
</html>