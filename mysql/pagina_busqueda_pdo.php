
<!doctype html>
<html>

<head>

<meta charset="utf-8">
<title>CONN MYSQL PDO</title>

</head>


<body>


<?php
		
	$busqueda=$_GET["buscar"];

	try {

	$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$base->exec("SET CHARACTER SET utf8");

	$sql="SELECT A, B, C, D, E, F, G FROM PRODUCTOS WHERE A = ? ";

	$resultado=$base->prepare($sql);

	$resultado->execute(array("$busqueda"));
	/*
	if ($resultado==true) {
	
		echo "resultado encontrado";

	} else {

		echo "resultado no encontrado";
	}*/

	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {

	echo "Nombre Artículo" . $registro['A']
	. "Sección" . $registro['B'] 
	. "Precio" . $registro['C'] 
	. "País de origen" . $registro['G'] 
	. "<br>";

	}

	$resultado->closeCursor();

	}catch(Exception $e) {

	die('Error: ' . $e->GetMessage());

	}finally {

	$base=NULL;

	}



?>

</body>
</html>