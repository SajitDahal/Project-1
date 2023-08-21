<?php
include("Connection.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Request Blood</title>
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
      <h1>Blood Request Form</h1>
      </div>
        
      <div class="form-headline">
        <h3>Please fill up the following form for Requesting the blood</h3>
        </div>
        
        <div class="req-form">
            <img src="images/blooddonation.jpg" alt="">

           <div class="fillform">
             <form action="" method="POST">
                <label for="text"><i class="fa-solid fa-user"></i> Enter Full Name:</label><br>
                <input type="text" id="name" class="form-input" name="name" required><br>
                 
                <label for="phone"><i class="fa-solid fa-phone"></i> Enter Phone Number:</label><br>
                 <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" class="form-input" required><br>
              <label for="bloodGroup"><i class="fa-solid fa-droplet"></i>Select Blood Group:</label>    
     <select class="form-input" id="bloodGroup" name="bg" required>
      <option value="">Select</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select><br>
     <label for="text"><i class="fa-solid fa-comment-dots"></i>Message:</label><br>
     <textarea name="message" class="form-input" id="message" cols="30" rows="10"></textarea>
      <div class="requestBtn">
        <button type="submit" name="submit">Submit</button></div>
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
  $bg = $_POST["bg"];
  $message = $_POST["message"];

  $query = "INSERT INTO request VALUES('$name','$phone','$bg','$message')";
  $data = mysqli_query($conn,$query);

  if($data){
    echo "<script>window.alert('Your Form has Been Submitted, Our Team will contact you soon!')</script>";
  }
  else{
    echo "Failed";
  }
  
 }

?>
