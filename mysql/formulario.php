<!doctype html>
<html>

<head>

<meta charset="utf-8">
<title>Formulario MYSQL</title>

</head>


<body>

	<form action="resultados_form.php" method="get">
		<label>Introduce país: <input type="text" name="buscar"></label>
		<input type="SUBMIT" name="button" value="Dale!">
	</form>

<?php

	include("datos_conn.php");

?>

</body>
</html>