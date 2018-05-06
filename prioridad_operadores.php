<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Constantes</title>

</head>

<body>

<?php


	$var1=true;
	$var2=false;

	$resultado=$var1 && $var2;
	//resultado=false

	if($resultado==true) {
		echo "True";
	}else{
		echo "False";
	}

	$var4=true;
	$var5=false;
	print "<br>";
	$resultado2=$var4 and $var5;

	if($resultado2==true) {
		echo "True";
	}else{
		echo "false";
	}

	

?>

</body>
</html>