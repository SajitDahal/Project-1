<?php
include("Connection.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Bridge</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
      <header>
        <div class="navbar-bank">
          <div class="logo-bank">
            <a href="HomePage.html">Blood<span> Bridge</span></a>
          </div>
          <ul class="link">
            <li><a href="HomePage.html">Home</a></li>
            <li><a href="banks.html">Find Blood Bank</a></li>
            <li><a href="donate.php">Register as a Donor</a></li>
            <li><a href="request.php">Request</a></li>
            <li><a href="adminlogin.php">Admin</a></li>

          </ul>
        </div>
      </header>

    <div class="banks-info">
      <h1>Form For Blood Donation</h1>
      </div>
        
      <div class="form-headline">
        <h3>Please fill up the following form for registering yourself as blood donor</h3>
        </div>

        <div class="form-fill">
         
     <div class="form-don">
           <form action="" method="post" >
            <h1 class="don-head">Create a Donor Account</h1>
  
    <input type="text" id="name" name="name"  class="input-box" placeholder="Full Name" required><br><br>
    
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" class="input-box" placeholder="phone" required><br><br>

    <input type="email" id="email" name="email" class="input-box" placeholder="Email" required><br><br>
    
   
    <input id="address" name="address"  class="input-box" placeholder="address" required></input><br><br>

    <input type="password"  id="pwd" name="pwd"  class="input-box" placeholder="Password" required></input><br><br>

    <input type="password"  id="cpwd" name="cpwd"  class="input-box" placeholder="Confirm Password" required></input><br><br>
    
    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" class="input-box" required>
     


    <div class="bloodgroup">
    <label for="bloodGroup">Blood Group:</label>
    <select id="bloodGroup"  class="input-box" name="bg" required>
      <option value="Not Selected">Select</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select><br><br>
   </div>

    <div class="gender">
       <label for="gender">Gender:</label><br>
   <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label><br>
    </div>
    <br>
  
   
    
    
    <input type="checkbox" id="agreeTerms" name="agreeTerms" required>
    <label for="agreeTerms" style="font-weight: 300;">I agree to the <a href="#">terms</a> and <a href="#">conditions</a></label><br><br>
    
    <div class="submit"><button type="submit" name="submit" >Submit</button></div>
    
  </form>
     </div>
      </div>

     
    </div>
    <div class="footer">
      <div class="logo-bank">
        <a href="HomePage.html">Blood<span> Bridge</span></a>
      </div>
      <div class="info">
        <h3>Contact Information</h3>
        <p>
          <i class="fa-solid fa-location-crosshairs"></i> Address:
          Kathmandu,Nepal <br />
          <i class="fa-solid fa-phone"></i> Phone:+977-9800000000 <br />
          <i class="fa-solid fa-envelope"></i> Email: bloodbridge@gmail.com
        </p>
      </div>
      <div class="endimg">
        <img src="images/new-nepal-map.png" alt="" />
      </div>
    </div>
    <div class="copyright">
      <hr />
      &copy; 2022 All rights reserved by BloodBridge
    </div>
    <a href="#" class="to-top">

      <i class="fa-solid fa-chevron-up"></i>
    </a>

    <script src="index.js"></script>
  </body>
</html>
<?php
 if(isset($_POST['submit'])){
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email= $_POST["email"];
  $address = $_POST["address"];
  $dob = $_POST["dob"];
  $bg = $_POST["bg"];
  $gender = $_POST["gender"];

  $query = "INSERT INTO donor VALUES('$name','$phone','$email','$address','$dob','$bg','$gender')";
  $data = mysqli_query($conn,$query);

  if($data){
    echo "<script>window.alert('Your Form has Been Submitted')</script>";
  }
  else{
    echo "Failed";
  }
  
 }

?>