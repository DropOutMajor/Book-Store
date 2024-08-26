<?php
$servername = "localhost";
$db_user= "root";
$db_pass = "";
$db_name = "demo";
$conn= "";

// Create connection
try{
  $conn = mysqli_connect($servername, $db_user, $db_pass,$db_name);
}
catch(mysqli_sql_exception){
  echo"could not connect";
}






?>


