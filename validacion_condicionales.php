<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php



		if(isset($_POST["enviando"])){
			$contra=$_POST["contra"];
			$nombre=$_POST["nombre_usuario"];

		switch (true){
		 
		 case $nombre=="Juan" && $contra=="1234":
		 	echo "Usuario autorizado. Hola Juan!";
		 	break;
		 
		 case $nombre=="María" && $contra=="5555":
		 	echo "Usuario autorizado. Hola Maria!";
		 	break;
		 
		 case $nombre=="Pedro" && $contra=="1111":
		 	echo "Usuario autorizado. Hola Pedro!";
		 	break;

		 default: 
		 	echo" Usuario no autorizado";
		}
		}




/*
	if(isset($_POST["enviando"])){
		$contra=$_POST["contra"];
		$nombre=$_POST["nombre_usuario"];

	$resultado = $nombre=="Jordi" && $contra=="1234" ? "Puedes acceder" : "No puedes acceder";

	echo $resultado;

	}

/*

		if(isset($_POST["enviando"])){
			$edad=$_POST["edad_usuario"];
			if ($edad<=18) {
			echo "eres menor de edad";
			} else if ($edad<=40) {
				echo "eres joven";
			} else if ($edad<=65) {
				echo "eres maduro";
			}else{
				echo "cu&iacute;date";
			}
		}


////////////////////////

		if(isset($_POST["enviando"])){
			$edad=$_POST["edad_usuario"];

	if($edad<18){
				echo "eres menor no tienes accesso";
			}else{
				echo "eres mayor de edad puedes acceder";
			}
		}
*/

		/*

	if(isset($_POST["enviando"])){
		$edad=$_POST["edad_usuario"];
			 $resultado= $edad<18 ? "Eres menos de edad. No puedes acceder" : "Puedes acceder";
				echo $resultado;
	}

	*/
?>