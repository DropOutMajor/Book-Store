<?php 
//Admin credentials saved here
include ("datab.php");
$username = "Sabie";
$password = "Mother";
$hash = password_hash ($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO tbladmin(username, password)
VALUES ('$username','$hash' )";

try{ mysqli_query ($conn, $sql);
echo "User is now registered";
}
catch(mysqli_sql_exception){
echo "Could not register user";
}
mysqli_close ($conn)

?>