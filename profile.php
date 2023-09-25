<?php
include("Connection.php");
session_start();

$userid = $_SESSION['userid'];

// Fetch user data from the database

$sql = "SELECT * FROM donor WHERE id = '$userid'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    // Retrieve user data
    $name = $row['name'];
    $phone = $row['phone'];
    $email = $row['email'];
    $address = $row['address'];
    $dob = $row['dob'];
    $bg = $row['bg'];
    $gender = $row['gender'];
    $pwd = $row['password'];
    
}
else{
  // echo"usernot FOund";
}

  ?>

  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body class="admin">
    <section id="menu">
      <div class="logo">
        <a href="HomePage.html">Blood<span> Bridge</span></a>
      </div>
      <div class="items">
        <li >
          <i class="fa-solid fa-gauge-high"></i
          ><a href="donorpanel.php">Dashboard</a>
        </li>
        <li class="active">
          <i class="fa-regular fa-address-book"></i
          ><a href="profile.php">Profile</a>
        </li>

        <li>
          <i class="fa-solid fa-right-from-bracket"></i
          ><a href="HomePage.html" onclick="confirmLogOut()">Log Out</a>
        </li>
      </div>
    </section>
    <section id="interface">
      <div class="navigation">
        <div class="n1">
          <div class="search">
            <h1>Welcome <?php echo $name; ?>!</h1>
          </div>
        </div>
      </div>
      <h3 class="i-name">Your Profile</h3>

      <!-- Code to display profile data here -->
         <div class="profile-card">
        <h2>Donor Profile</h2>
        <form>
            <div class="profile-info">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
                
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo $address; ?>" required>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" required>

                <label for="blood-group">Blood Group:</label>
                <select id="blood-group" name="blood-group" >
                   <option value="not selected">Select:</option required>
                    <option value="A+"
                    <?php
                    if($bg == 'A+'){
                        echo "selected";
                    }
                  ?>>A+</option>
                    <option value="A-"
                     <?php
                    if($bg == 'A-'){
                        echo "selected";
                    }
                  ?>>A-</option>
                    <option value="B+"
                     <?php
                    if($bg == 'B+'){
                        echo "selected";
                    }
                  ?>>B+</option>
                    <option value="B-"
                     <?php
                    if($bg == 'B-'){
                        echo "selected";
                    }
                  ?>>B-</option>
                    <option value="O+"
                     <?php
                    if($bg == 'O+'){
                        echo "selected";
                    }
                  ?>>O+</option>
                    <option value="O-"
                     <?php
                    if($bg == 'O-'){
                        echo "selected";
                    }
                  ?>>O-</option>
                    <option value="AB+"
                     <?php
                    if($bg == 'AB+'){
                        echo "selected";
                    }
                  ?>>AB+</option>
                    <option value="AB-"
                     <?php
                    if($bg == 'AB-'){
                        echo "selected";
                    }
                  ?>>AB-</option>
                </select>

                <label for="gender">Gender</label>
                <input type="text" id="gender" name="gender" value="<?php echo $gender; ?>" required>


                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $pwd?>">
            </div>
            <div class="submit-button">
              <a href="editprofile.php">Edit</a>
            </div>
            
        </form>
    </div>



    </section>
    <script>
function confirmLogOut() {
  return confirm("Are you sure want to Log Out?");
}
</script>
  </body>
</html>
