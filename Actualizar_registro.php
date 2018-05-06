<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Constantes</title>

</head>

<body>


<?php 


// $varbus=$_GET['namesearch'];
//hola prova de git 2
$campo_a=$_GET["a"];
$campo_b=$_GET["b"];
$campo_c=$_GET["c"];
$campo_d=$_GET["d"];
$campo_e=$_GET["e"];
$campo_f=$_GET["f"];
$campo_g=$_GET["g"];

require("datos_conn.php");

$consulta1="UPADTE PRODUCTOS SET 
A='$campo_a',
B='$campo_b',
C='$campo_c',
D='$campo_d',
E='$campo_e',
F='$campo_f',
G='$campo_g' 
WHERE 
A='$campo_a'";

$res=mysqli_query($conn, $consulta1); 

// ERROR en la CONSULTA

if($res==false) {
	echo "error en la consulta";
}else {

echo "se han registrado los campos a la bbdd";

}

mysqli_close($conn);


?>



</body>
</html>