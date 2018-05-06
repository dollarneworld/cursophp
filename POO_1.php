<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>POO_1</title>

</head>

<body>

<?php


include ("vehiculos.php");

$mazda = new Coche;

$pegaso = new Camion;



echo "El mazda tiene " . $mazda->get_ruedas() . " ruedas <br>";


echo "El mazda tiene " . $mazda->get_motor() . " cc <br>";


echo "El pegaso tiene " . $pegaso->get_ruedas() . " ruedas <br>";

/* echo "El Pegaso tiene " . $pegaso -> ruedas . " ruedas <br>"; */

// echo $pegaso -> color;

$pegaso -> arrancar();

echo "<br>";

$pegaso -> set_color('pegaso','amarillo');

echo "<br>";


/*

		// CLASSES

	class Coche{

		// ATRIBUTOS/PROPIEDADES

		var $ruedas;
		var $color;
		var $motor;


		//ESTADO INICIAL DEL OBJETO EN ESTE CASO COCHE

		function Coche(){ //METODO CONSTRUCTOR
			$this -> ruedas=4;
			$this -> color="";
			$this -> motor=1600;

		}


		// FUNCIONALIDADES

		function arrancar() {

			echo "Estoy arrancar <br>";

		}

		function girar() {

			echo "Estoy girando <br>";

		}

		function frenar() {

			echo "Estoy frenando <br>";

		}

		function quecolor($pickcolor,$nombre_coche) {

			$this -> color=$pickcolor;

			echo "El color de " . $nombre_coche . " es: " . $this ->color . "<br>";
		}

	}



	// CLASSES INSTANCIADAS

	$renault=new Coche(); // Estado inicial al objeto.
	$mazda=new Coche();
	$seat=new Coche();


	$renault->quecolor("rojo", "renault");
	$seat->quecolor("azul", "seat");

	//$mazda -> girar();

	//echo $mazda -> ruedas;



*/

?>

</body>
</html>