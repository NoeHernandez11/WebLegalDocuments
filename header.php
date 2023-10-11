<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="facebook"></a>
            
            <a href="#" class="instagram"></a>
            <a href="#" class="linkedin"></a>
         </div>
         
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">WebLegalDocuments</a>

         <nav class="navbar">
            <a href="home.php">home</a>
            
            <a href="contact.php">contact</a>
            
         </nav>

         <div class="icons">
            <div id="menu-btn" class="bars"></div>
            
            <div id="user-btn" class="user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `responsable` WHERE user_id = '$user_id'") or die('query failed');
                
            ?>
            <a href="cart.php"> <i class="fas fa-ping"></i> <span>(<?php echo $responsable_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            
         </div>
      </div>
   </div>

</header>