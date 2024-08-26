<?php

include 'datab.php';

session_start();


if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `tbladmin` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_users.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>users</title>
    <link rel="stylesheet" href="Css/styler2.css" />

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="users">

   <h1 class="title"> user accounts </h1>

   <div class="box-container">
      <?php
         $select_users = mysqli_query($conn, "SELECT * FROM `tbladmin`") or die('query failed');
         while($fetch_users = mysqli_fetch_assoc($select_users)){
      ?>
      <div class="box">
        
         <p> username : <span><?php echo $fetch_users['username']; ?></span> </p>
         <p> password : <span><?php echo $fetch_users['password']; ?></span> </p>

         <a href="admin_users.php?delete=<?php echo $fetch_users['username']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete user</a>
      </div>
      <?php
         };
      ?>
   </div>

</section>



</body>
</html>