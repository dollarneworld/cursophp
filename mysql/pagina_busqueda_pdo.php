
<!doctype html>
<html>

<head>

<meta charset="utf-8">
<title>CONN MYSQL PDO</title>

</head>


<body>


<?php 

		$busqueda_sec=$_GET['seccion'];
		$busqueda_porig=$_GET['p_orig'];

         try
        {
            $base= new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
            $base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            

            $base->exec("SET CHARACTER SET utf8");

            // $sql= "SELECT C, B, D, F FROM productos WHERE C=?";

            $sql= "SELECT C, B, D, F FROM productos WHERE B=:secc AND G=:porig "; //nombre al marcador

              $resultado=$base->prepare($sql);//se almacena un objeto tipo PDOStatement

              $resultado->execute(array(":secc"=>$busqueda_sec,":porig"=>$busqueda_porig));
 
          while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
          
             echo " Nombre Artículo: " . $registro['C'] . " Sección: " . $registro['B'] . " Precio:" . $registro['D'] . " Importado: " . $registro['F'] . "<br>";

        }
             $resultado-> closeCursor();
 
             }catch(Exception $e){
             
               die('Error: ' . $e -> GetMessage());
              
             }finally{
             
               $base=null;
              
             }
        


?>

</body>
</html>