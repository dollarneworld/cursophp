
<!doctype html>
<html>

<head>

<meta charset="utf-8">
<title>CONN MYSQL PDO</title>

</head>


<body>


<?php
		
	$campo_a=$_POST["a"];
	$campo_b=$_POST["b"];
	$campo_c=$_POST["c"];
	$campo_d=$_POST["d"];
	$campo_e=$_POST["e"];
	$campo_f=$_POST["f"];
	$campo_g=$_POST["g"];

	try {

	$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$base->exec("SET CHARACTER SET utf8");

	$sql="INSERT INTO PRODUCTOS (A,B,C,D,E,F,G) VALUES (:a,:b,:c,:d,:e,:f,:g)";

	$resultado=$base->prepare($sql);

	$resultado->execute(array(
		":a"=>$campo_a,
		":b"=>$campo_b,
		":c"=>$campo_c,
		":d"=>$campo_d,
		":e"=>$campo_e,
		":f"=>$campo_f,
		":g"=>$campo_g
	));

	echo "Registro insertado";

	$resultado->closeCursor();

	}catch(Exception $e) {

	echo "Linea del error: " . $e->getLine();

	}finally {

	$base=NULL;

	}



?>

</body>
</html>