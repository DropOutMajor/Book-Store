<?php
include("datab.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="Css/logstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"method="post">
    <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in">
    <label for="tab-1" class="tab"><a href="login.php">Sign In</a></label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" checked>
    <label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
					<label for="name" class="label">Name</label>
					<input name="name" type="text" class="input">
				</div>
				<div class="group">
					<label for="surname" class="label">Surname</label>
					<input name="surname" type="text" class="input">
				</div>
				<div class="group">
					<label for="email" class="label">Email</label>
					<input name="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input name="password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Confirm Password</label>
					<input name="cpassword" type="password" class="input"  data-type="password">
				</div>
				<div class="group">
					<input type="submit" name="register" value="Sign Up" class="button">
					<a href="login.php"></a>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1"><a href="login.php">Already Have An Account?</a></a>
				</div>
			</div>
		</div>
	</div>
</div>



    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name= filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
    $surname= filter_input(INPUT_POST,"surname",FILTER_SANITIZE_SPECIAL_CHARS);
    $email= filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
    $password= filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
    $cpassword= filter_input(INPUT_POST,"cpassword",FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($name)){
        echo"Enter user Name";

    }
    else if(empty($surname) ){
        echo"Enter user Surname";

    }
    else if(empty($email) ){
        echo"Enter Email";

    }
    else if(empty($password) ){
        echo"Enter Password";

    }
    else if(empty($cpassword) ){
        echo"Re-enter Password";

    }
    else{
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql ="INSERT INTO tbl_users (name, surname, email, password) 
        VALUES('$name', '$surname', '$email', '$hash')";

        try{
        mysqli_query($conn,$sql);
        echo"registered I hope";
        header("Location: login.php");
        }
        catch(mysqli_sql_exception){
            echo"email already in use";
        }
    }
   
exit; 
}
mysqli_close($conn);
?>