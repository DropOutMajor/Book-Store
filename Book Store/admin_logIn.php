<?php
include("datab.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="Css/logstyle.css">
  </head>
  <body>
  <form class="" action="" method="post" autocomplete="off">
     <div class="login-wrap">
     	<div class="login-html">
       <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Admin Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" ><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="username" class="label">Username</label>
					<input id="username" name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input id="password" name="password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="submiter" class="button" value="Sign In">
          <label for="tab-1"><a href="login.php">User login?</a></a>
				</div>
         </div>
      </div>
		    </div>
	    </div>
     </div>
   </form>
  </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    // Check if the provided email and password match a user in the database
    $sql = "SELECT * FROM tbladmin WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username']; // Store email in session
            header("Location: admin_page.php"); // Redirect to the dashboard page
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Invalid username.";
    }

    mysqli_free_result($result);
}

mysqli_close($conn);
?>
 
