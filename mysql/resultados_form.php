
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Resultados</title>
</head>

<body>

<?php 

	$g = $_GET["buscar"];

	require("datos_conn.php");

	$conn=mysqli_connect("localhost", "root", "", "pruebas");

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}

	mysqli_select_db($conn,"pruebas") or die ("No se encuentra la BBDD");

	mysqli_set_charset($conn, "utf8");

	// CONSULTAS PREPARADAS PASOS A SEGUIR:

	// PRIMERO:
	// CREAMOS SENTENCIA SQL SUSTITUYENDO LOS VALORES DEL CRITERIO POR EL SÍMNOLO ?

	$sql="SELECT A,B,D,G FROM PRODUCTOS WHERE G=?";

	// SEGUNDO:
	// PREPARAR LA CONSULTO UTILIZANDO LA FUNCION MYSQLI_PREPARE() PARA QUE NOS DEVUELVA EL OBJETO CLAVE DEL PROCESO.

	$objetoclave=mysqli_prepare($conn, $sql);

	//TERCERO:
	//UNIR LOS PARAMETROS DEL USUARIO A LA SENTENCIA SQL 

	$ok=mysqli_stmt_bind_param($objetoclave,"s",$g);

	//CUARTO:
	//EJECUTAR LA CONSULTA 

	$ok=mysqli_stmt_execute($objetoclave);

	if($ok==false) {
		echo "Error al ejecutar la consulta";
	}else{

	//QUINTO
	//ASOCIAR LAS VARIABLES A LOS CAMPOS DE LA CONSULTA

	$ok=mysqli_stmt_bind_result($objetoclave,$a,$b,$d,$g);

	//SEXTO
	//LEER LA CONSULTA Y QUE LO MUESTRE EN PANTALLA

	echo "Articulos encontrados: <br><br>";

	while(mysqli_stmt_fetch($objetoclave)) {

		echo $a . " " . $b . " " . $d . " " . $g . " " . "<br>";
	}	

	mysqli_stmt_close($objetoclave);

	}







?>


</body>
</html>