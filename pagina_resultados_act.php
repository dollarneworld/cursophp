<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Busqueda</title>

</head>

<body>

<?php 


$varbus=$_GET['namesearch'];

require("datos_conn.php");

$consulta1="SELECT * FROM productos WHERE C LIKE '%$varbus%' ";

$res=mysqli_query($conn, $consulta1);

while($fila=mysqli_fetch_assoc($res)){


	echo "<form action='Actualizar_registro.php' method='get'>";

	echo "<input type='text' name='a' value='" . $fila['A'] . "'><br>";
	echo "<input type='text' name='b' value='" . $fila['B'] . "'><br>";
	echo "<input type='text' name='c' value='" . $fila['C'] . "'><br>";
	echo "<input type='text' name='d' value='" . $fila['D'] . "'><br>";
	echo "<input type='text' name='e' value='" . $fila['E'] . "'><br>";
	echo "<input type='text' name='f' value='" . $fila['F'] . "'><br>";
	echo "<input type='text' name='g' value='" . $fila['G'] . "'><br>";

	echo "<input type='SUBMIT' name='actbutton' value='Actualizar!'>";

	echo "</form>";

	echo "<br>";

}



mysqli_close($conn);




?>

</body>
</html>