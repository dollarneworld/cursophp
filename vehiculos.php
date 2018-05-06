<?php

	class Coche{

		// ATRIBUTOS/PROPIEDADES

		protected $ruedas;
		var $color;
		protected $motor;


		//ESTADO INICIAL DEL OBJETO EN ESTE CASO COCHE

		function Coche(){ //METODO CONSTRUCTOR
			$this -> ruedas=4;
			$this -> color="";
			$this -> motor=1600;

		}

		function get_motor() {
			return  $this -> motor;
		}

		function get_ruedas() {
			return $this -> ruedas;
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

		function set_color($color_coche,$nombre_coche) {

			$this -> color=$color_coche;

			echo "El color de " . $nombre_coche . " es: " . $this ->color . "<br>";
		}

	}

	////////////////////////////////////////

		class Camion extends Coche {

		//ESTADO INICIAL DEL OBJETO EN ESTE CASO COCHE

		function Camion(){ //METODO CONSTRUCTOR
			$this -> ruedas=8;
			$this -> color="";
			$this -> motor=2600;

		}


		function set_color($color_camion,$nombre_camion) {

			$this -> color=$color_camion;

			echo "El color de " . $nombre_camion . " es: " . $this ->color . "<br>";
		}


		function arrancar() {
			parent::arrancar();
			echo "Ya he arrancado";
		}


	}


?>