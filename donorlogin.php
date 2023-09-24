<?php 
include("Connection.php");
session_start();
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Donor login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form action="" method="POST" >
        <div class="title">Donor Login</div>


        <div class="input-box underline">
          <input type="text" placeholder="Enter Your Email" name="email" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter Your Password" name="password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="submit" value="Login">
        </div>
        <a href="#">Forgot Password?</a>
      </form>
    </div>
  </body>
</html>

<?php 
  if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM donor WHERE email = '$email' && password= '$pwd'";
    $data = mysqli_query($conn,$query);

    $result = mysqli_num_rows($data);
    
    if($result == 1){
     
      $row = mysqli_fetch_assoc($data);
      $_SESSION['userid'] = $row['id'];
      header('location:donorpanel.php');
      exit();
    }
    else{
      echo "<script>alert('Incorrect Password/Email')</script>";
      
    }
  }
 
?>

