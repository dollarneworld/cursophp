
<!doctype html>
<html>

<head>

<meta charset="utf-8">
<title>CONN MYSQL PDO</title>

</head>


<body>


<?php

	try {

	$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

	echo "Conexión OK";

	}catch(Exception $e) {

	die('Error: ' . $e->GetMessage());

	}finally {

	$base=NULL;

	}



?>

</body>
</html>