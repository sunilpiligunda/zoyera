<?php

$conn = mysqli_connect('localhost','root','','cwmsdb') or die('connection failed');
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profile</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">Update profile</a>
      <a href="logout.php" class="delete-btn">Logout</a>
      <a href="index.php" class="delete-btn">Back to home</a>
      
      <p>New <a href="login.php">Login</a> or <a href="register.php">Register</a></p>
   </div>

</div>

</body>
</html>