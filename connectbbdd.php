<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Constantes</title>
<style>

table{
	width:50;
	border:1px solid red;
	background: black;
	color: white;
	text-align: center;
	margin: auto;
}

</style>

</head>

<body>

<?php 


require("datos_conn.php");

$consulta1="SELECT * FROM productos";

$res=mysqli_query($conn, $consulta1);

while($fila=mysqli_fetch_assoc($res)){
//NO PILLA ELS CAMPS
//*SELECT * FROM `productos` WHERE `C` LIKE '%CABALLERO'
//*SELECT * FROM `productos` WHERE `C` LIKE 'CENI_ERO';
	echo "<table><tr><td>";
	echo $fila['A'] . "</td><td>";
	echo $fila['C'] . "</td><td>";
	echo $fila['G'] . "</td><td></tr></table>";
	echo "<br>";
	echo "<br>";

}

mysqli_close($conn);

?>

</body>
</html>