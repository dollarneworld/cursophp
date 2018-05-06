

<?php 

/*
$db_host="localhost";
$db_name="pruebas";
$db_user="root";
$db_pass="";
*/

  $conn = new mysqli("localhost", "root", "", "pruebas");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database.<br>';

  mysqli_set_charset($conn, "utf8");

?>
