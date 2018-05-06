<!doctype html>
<html>

<head>

<meta charset="utf-8">
<title>Constantes</title>

</head>


<body>

	<form action="login_search.php" method="get">
		<label>Codigo Articulo: <input type="text" name="CODIGOARTICULO"></label>
		<label>Seccion: <input type="text" 		   name="SECCION"></label>
		<label>Nombre Articulo: <input type="text" name="NOMBREARTICULO"></label>
		<input type="SUBMIT" name="button" value="login">
	</form>

<?php

	include("datos_conn.php");

?>

</body>
</html>