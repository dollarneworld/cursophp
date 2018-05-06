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

$consulta1="INSERT INTO PRODUCTOS (A,B,C,D,E,F,G) VALUES ('$campo_a','$campo_b','$campo_c', '$campo_d', '$campo_e', '$campo_f', '$campo_g') ";

$res=mysqli_query($conn, $consulta1); 

if($res==false) {
	echo "error en la consulta";
}else {

echo "se han registrado los campos a la bbdd";

}

mysqli_close($conn);


?>



</body>
</html>