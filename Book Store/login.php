<?php
include("datab.php");
session_start();

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
<form class="" action="" method="post" autocomplete="off">
     <div class="login-wrap">
     	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="reg.php">Sign Up</a></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="email" name="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="login" class="button" value="Log in">
				</div>
				<div class="hr"></div>
                
				<div class="foot-lnk">
					<label for="tab-1"><a href="reg.php">Dont Have An Account?</a></a><br>
					<label for="tab-1"><a href="admin_logIn.php">Admin?</a></a>
				</div>
                </div>
		    </div>
	    </div>
   </form>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    // Check if the provided email and password match a user in the database
    $sql = "SELECT * FROM tbl_users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email']; // Store email in session
            header("Location: home.php"); // Redirect to the dashboard page
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Invalid email.";
    }

    mysqli_free_result($result);
}

mysqli_close($conn);
?>
 
