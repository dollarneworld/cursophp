<style>

.resultado {
  color: #F00;
  font-weight: bold;
  font-size:32px;
}


</style>
<?php

  if(isset($_POST["button"])){

    $var1=$_POST["num1"];
    $var2=$_POST["num2"];
    $operacion=$_POST["operacion"];

    calcular($operacion);

  }

  function calcular($calculo){

    if(!strcmp("Suma",$calculo)){

      global $var1;
      global $var2;

      $resultado=$var1+$var2;

      echo "<p class='resultado'>El resultado es: $resultado </p>";

    }

    if(!strcmp("Resta",$calculo)){

      global $var1;
      global $var2;

      $resultado=$var1-$var2;

      echo "<p class='resultado'>El resultado es: $resultado </p>";

    }

    if(!strcmp("Multiplicación",$calculo)){
      global $var1;
      global $var2;


      $resultado=$var1*$var2;

      echo "<p class='resultado'>El resultado es: $resultado </p>";

    }

    if(!strcmp("División",$calculo)){
      global $var1;
      global $var2;

      $resultado=$var1/$var2;

      echo "<p class='resultado'>El resultado es: $resultado </p>";

    }

    if(!strcmp("Módulo",$calculo)){
      global $var1;
      global $var2;

      $resultado=$var1%$var2;

      echo "<p class='resultado'>El resultado es: $resultado </p>";

    }

        if(!strcmp("Incremento",$calculo)){

               global $var1;
       $var1++;

      $resultado=$var1;

      echo "<p class='resultado'>El resultado es: $resultado </p>";

    }

    if(!strcmp("Decremento",$calculo)){
       
     global $var1;
       $var1--;


      $resultado=$var1;

      echo "<p class='resultado'>El resultado es: $resultado </p>";

    }

  }




?>