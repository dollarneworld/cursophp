<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Constantes</title>

</head>

<body>


<?php 


// $varbus=$_GET['namesearch'];

require("datos_conn.php");

$consulta1="INSERT INTO PRODUCTOS (A,B,C) VALUES ('AR45','DEPORTES','ZAPATILLAS') ";

$res=mysqli_query($conn, $consulta1);

mysqli_close($conn);


?>



</body>
</html>