<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Constantes</title>

</head>

<body>

<?php

 $num1=rand(10,50);

 echo "El número es: " . $num1;

 $num2=pow(5,3);

 echo "<br>El número de pow  " . $num2;

  $num3=5.2332232323;

 echo "<br>El número de round  " . round($num3, 2);


 /*Casting explicito */ 
 
 $num5="5";
 $resultado=(int)$num5;

?>

</body>
</html>