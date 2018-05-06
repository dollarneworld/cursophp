
<!doctype html>
<html>

<head>

<meta charset="utf-8">
<title>CONN MYSQL OO</title>

</head>


<body>


<?php

	$variableconexion=new mysqli ("localhost", "root", "", "pruebas");

	if ($variableconexion->connect_errno){

		echo "connect_errno / Falló la conexión or";

	}

	$variableconexion -> set_charset("utf8");

	// instrucción sql

	$sql="SELECT * FROM PRODUCTOS";

	$resultados=$variableconexion -> query($sql);

	if ($variableconexion->errno){

		die($variableconexion->error);
	}

	// una vez terminada la consulta un bucle while que recorra los resultados

	while($fila=$resultados->fetch_array()){

	echo "<table><tr><td>";

	echo $fila['0'] . "</td><td>";
	echo $fila['1'] . "</td><td>";
	echo $fila['2'] . "</td><td>";
	echo $fila['3'] . "</td><td>";
	echo $fila['4'] . "</td><td>";
	echo $fila['5'] . "</td><td>";
	echo $fila['6'] . "</td><td>";

	echo "</td></tr></table>";

	echo "<br>";
	
	}

	$variableconexion -> close();
	
?>

</body>
</html>