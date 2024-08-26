<?php
include("datab.php");

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<Link rel="Stylesheet"href="Css/styler.css">
<header class="header">

   <div class="header-1">
    
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">DropOuts<span>ReadBooks.</a>

         <nav class="navbar">
            <a href="home.php">home</a>
            <a href="orders.php">orders</a>
            <a href="books.php">books</a>
            <a href="cart.php.">cart</a>
            <a href="contact.php.">contact us</a>
            <p style="background-image: url('book/background.jpg');">
         </nav>
         
         <div class="icons">
            
          
           
            <?php
            $user_id='id';

               $select_cart_number = mysqli_query($conn, "SELECT * FROM `tbl_cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            
           
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>