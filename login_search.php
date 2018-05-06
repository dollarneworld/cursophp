<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Busqueda</title>

</head>

<body>

<?php 

require("datos_conn.php");

$CODIGOARTICULO=MYSQLI_REAL_ESCAPE_STRING($conn,$_GET['CODIGOARTICULO']);
$SECCION=MYSQLI_REAL_ESCAPE_STRING($conn,$_GET['SECCION']);
$NOMBREARTICULO=MYSQLI_REAL_ESCAPE_STRING($conn,$_GET['NOMBREARTICULO']);

// z=z => borrar 1=1 => ver todo

// $consulta1="SELECT * FROM productos WHERE C LIKE '%$varbus%' ";

$consulta1="DELETE FROM 
productos3 
WHERE 
CODIGOARTICULO='$CODIGOARTICULO' and 
SECCION='$SECCION' and 
NOMBREARTICULO='$NOMBREARTICULO' ";

echo "<br> $consulta1 <br><br>";

mysqli_query($conn, $consulta1);

if(mysqli_affected_rows($conn)>0){

echo "baja procesada";

}else{

echo "no se han encontrado registros a borrar";

}

/*

while($fila=mysqli_fetch_assoc($res)){
//NO PILLA ELS CAMPS
//*SELECT * FROM `productos` WHERE `C` LIKE '%CABALLERO'
//*SELECT * FROM `productos` WHERE `C` LIKE 'CENI_ERO';
	echo "<table><tr><td>";

	echo $fila['CODIGOARTICULO'] . "</td><td>";
	echo $fila['SECCION'] . "</td><td>";
	echo $fila['NOMBREARTICULO'] . "</td><td></tr></table>";
	
	echo "<br>";
	echo "<br>";

}
*/


mysqli_close($conn);




?>

</body>
</html>