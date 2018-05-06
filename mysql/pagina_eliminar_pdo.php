
<!doctype html>
<html>

<head>

<meta charset="utf-8">
<title>CONN MYSQL PDO</title>

</head>


<body>


<?php
		
	$campo_a=$_POST["a"];

	try {

	$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$base->exec("SET CHARACTER SET utf8");

	$sql="DELETE FROM PRODUCTOS WHERE A=:a";

	$resultado=$base->prepare($sql);

	$resultado->execute(array(":a"=>$campo_a));

	echo "Registro eliminado";

	$resultado->closeCursor();

	}catch(Exception $e) {

	echo "Linea del error: " . $e->getLine();

	}finally {

	$base=NULL;

	}



?>

</body>
</html>