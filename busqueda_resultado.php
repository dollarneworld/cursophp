<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Busqueda</title>

<?php 

function ejecuta_consulta($labusqueda)
{

// $varbus=$_GET['namesearch'];

require("datos_conn.php");

$consulta1="SELECT * FROM productos WHERE C LIKE '%$labusqueda%' ";

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
}



?>



</head>

<body>

<?php 

	$mibusqueda=$_GET["buscar"];
	$mipag=$_SERVER["PHP_SELF"];

	if($mibusqueda!=NULL) {

		ejecuta_consulta($mibusqueda);
	}else {
		echo ("<form action='" . $mipag . "' method='get'
			<label>Buscar:<input type='text' name='buscar'></label>
			<input type='submit' name='enviando' value='Dale!''></form>");
	}



?>


</body>
</html>