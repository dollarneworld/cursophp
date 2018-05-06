<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Funciones</title>

</head>

<body>

<?php

	function isiwin($frase,$conversion=true) {

		$frase=strtolower($frase);

		if($conversion==true) {

			$resultado=ucwords($frase);

		}else {
			$resultado=strtoupper($frase);
		}
		return $resultado;

	}

	echo (isiwin("esto es una prueba",false));

?>



</body>
</html>