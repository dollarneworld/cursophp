<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Funciones</title>

</head>

<body>

<?php

function magia(&$param) {

	$param=strtolower($param);

	$param=ucwords($param);

	return $param;

} 

$cadena="hOlA mUNDo";

echo magia($cadena) . "<br>";

echo $cadena;



function incrementa(&$valor1) {

	$valor1++;

	return $valor1;

}

$numero=5;

echo "<br>" . incrementa($numero) . "<br>";

echo $numero;

?>



</body>
</html>