<?php
include("Connection.php");

$name = $_GET['n'];
$query = "SELECT * FROM donor WHERE name= '$name'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
 $result = mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
        <section class="container">
            <header>Edit Donor Form</header>
                 <form action="" method="post" >
  
    <input type="text" id="name" name="name" value="<?php echo $result['name'];  ?>" class="input-box" placeholder="Full Name" required><br><br>
    
    <input type="tel" id="phone" value="<?php echo $result['phone'];  ?>" name="phone" pattern="[0-9]{10}" class="input-box" placeholder="phone" required><br><br>

    <input type="email" id="email" value="<?php echo $result['email'];  ?>" name="email" class="input-box" placeholder="Email" required><br><br>
    
   
    <input id="address" name="address" value="<?php echo $result['address'];  ?>" class="input-box" placeholder="address" required></input><br><br>
    
    <label for="dob" class="labely">Date of Birth:</label>
    <input type="date" id="dob" name="dob" class="input-box" value="<?php echo $result['dateofbirth'];  ?>" required><br><br>
     

    <div class="bloodgroup">
    <label class="labely" for="bloodGroup">Blood Group:</label>
    <select id="bloodGroup" class="input-box" name="bg" required>
      <option value="Not Selected">Select</option>
      <option value="A+"
      <?php
        if($result['bloodgroup']== 'A+'){
            echo "selected";
        }
      ?>

      >A+</option>
      <option value="A-"
      <?php
        if($result['bloodgroup']== 'A-'){
            echo "selected";
        }
      ?>
      >A-</option>
      <option value="B+"
      <?php
        if($result['bloodgroup']== 'B+'){
            echo "selected";
        }
      ?>
      >B+</option>
      <option value="B-"
      <?php
        if($result['bloodgroup']== 'B-'){
            echo "selected";
        }
      ?>
      >B-</option>
      <option value="AB+"
      <?php
        if($result['bloodgroup']== 'AB+'){
            echo "selected";
        }
      ?>
      >AB+</option>
      <option value="AB-"
       <?php
        if($result['bloodgroup']== 'AB-'){
            echo "selected";
        }
      ?>
      >AB-</option>
      <option value="O+"
       <?php
        if($result['bloodgroup']== 'O+'){
            echo "selected";
        }
      ?>
      >O+</option>
      <option value="O-"
        <?php
        if($result['bloodgroup']== 'O-'){
            echo "selected";
        }
      ?>>O-</option>
    </select><br><br>
   </div>

    <div class="gender">
       <label class="labely" for="gender">Gender:</label><br>
   <input type="radio" id="male" name="gender" value="male">
    <label  for="male" class="labely">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female" class="labely">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other" class="labely">Other</label><br>
    </div>
    <br>
  
   
    
    
    <input type="checkbox" id="agreeTerms" name="agreeTerms" required>
    <label for="agreeTerms" class="labely">I agree to the <a href="#">terms</a> and <a href="#">conditions</a></label><br><br>
    
    <button type="submit" name="update" class="submit">Update</button>
    
  </form>
</section>

</body>
</html>
<?php
 if(isset($_POST['update'])){
  $names = $_POST["name"];
  $phone = $_POST["phone"];
  $email= $_POST["email"];
  $address = $_POST["address"];
  $dob = $_POST["dob"];
  $bg = $_POST["bg"];
  $gender = $_POST["gender"];

  $query ="UPDATE donor SET name='$names',phone='$phone',email='$email',dateofbirth='$dob',bloodgroup='$bg',gender='$gender' WHERE name='$name'"; 
   $data = mysqli_query($conn,$query);

  if($data){
    // echo "<script>window.alert('Your Data has Been Updated')</script>";

    ?>
    <meta http-equiv="refresh" content="0; URL=http://localhost/projectI/admin.php" />

    <?php
  }
  else{
    echo "Failed";
  }
  
 }
 ?>
