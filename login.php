<?php
$conn = mysqli_connect('localhost','root','','cwmsdb') or die('connection failed');
session_start();


if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body background="img/lgn.jpg" class="lgn_img">
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>login</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="Enter email" class="box" required>
      <input type="password" name="password" placeholder="Enter Password" class="box" required>
      <?php 
        
        if (!isset($_SESSION["user_id"])) {
           echo '<input type="submit" name="submit" value="Login" class="btn">';
            
        }
         else {
            echo '<input type="submit" name=""  onclick="showAlert()" value="Login " class="btn">';
             echo '<a href="logout1.php" class="delete-btn">logout</a>';
            // echo 'You are already logged in';
        }
    
    ?>
    <a href="index.php" class="delete-btn">Back to home</a>
      <!-- <input type="submit" name="submit" value="login now" class="btn"> -->
      <p>Don't have an account? <a href="register.php">Register now</a></p>
   </form>

</div>
<script>
  function showAlert() {
    alert ("You are already logged in");
  }
  </script>

</body>
</html>