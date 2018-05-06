<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

	$var1=8; //int 
	$var2="8"; // string 
	$var3="Jordi";

	if($var1==$var2) {
		echo"<br>son iguales";
	}else{
		echo"<br>no son iguales";
	}

	if($var1===$var2) {
		echo"<br>son iguales";
	}else{
		echo"<br>no son iguales";
	}
	

	if($var1==$var3) {
		echo"<br>son iguales";
	}else{
		echo"<br>no son iguales";
	}

		if($var1!=$var3) {
		echo"<br>son  diferentes";
	}else{
		echo"<br>no son diferentes";
	}

?>
	
</body>
</html>
