<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Constantes</title>

</head>

<body>


<?php 


// $varbus=$_GET['namesearch'];

$campo_a=$_GET["a"];
$campo_b=$_GET["b"];
$campo_c=$_GET["c"];
$campo_d=$_GET["d"];
$campo_e=$_GET["e"];
$campo_f=$_GET["f"];
$campo_g=$_GET["g"];

require("datos_conn.php");

$consulta1="DELETE FROM PRODUCTOS WHERE A='$campo_a'";

$res=mysqli_query($conn, $consulta1); 

if($res==false) {
	echo "error en la consulta";
}else {

// echo "se han eliminado los campos a la bbdd";

if (mysqli_affected_rows($conn)==0) {

 echo "no hay registros que eliminar con ese criterio";

} else {

echo "se han eliminado " . mysqli_affected_rows($conn) . " registros";

}
}

mysqli_close($conn);


?>



</body>
</html>