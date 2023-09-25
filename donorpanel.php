<?php
include("Connection.php");
session_start();
$query = "SELECT * FROM donor";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

$query2 = "SELECT * FROM request";
$data2 = mysqli_query($conn,$query2);
$total2 = mysqli_num_rows($data2);



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

if($total != 0){

  ?>

  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donor Panel</title>
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
        <li class="active">
          <i class="fa-solid fa-gauge-high"></i
          ><a href="donorpanel.php">Dashboard</a>
        </li>
        <li>
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
        <div class="profile">
          <i class="fa-solid fa-bell"></i>
          <img src="images/user-m.jpg" alt="" />
        </div>
      </div>
      <h3 class="i-name">Blood Requests</h3>
      <div class="values">
        <div class="val-box">
          <i class="fa-solid fa-droplet"></i>
          <div>
            <h3>8</h3>
            <p>Blood Groups</p>
          </div>
        </div>
        <div class="val-box">
          <i class="fa-solid fa-truck-fast"></i>
          <div>
            <h3><?php
            echo $total2;
            ?></h3>
            <p>Request</p>
          </div>
        </div>
        <div class="val-box">
          <i class="fa-solid fa-square-check"></i>
          <div>
            <h3>45</h3>
            <p>Donated</p>
          </div>
        </div>
      </div>
      <div class="board">
        <h1>Requests</h1>
        <table width="100%">
          <thead>
            <tr>
              <td>Name</td>
              <td>Phone</td>
              <td>BG</td>
              <td>Message</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            <?php
  while($result = mysqli_fetch_assoc($data2)){
      echo "<tr>
              <td class='donor'>
                <img src='images/user3.jpg'alt='' />
                <div class='donor-de'>
                  <h4>".$result['fullname']."</h4>
                </div>
              </td>
              <td>".$result['phone']."</td>
              <td>".$result['bloodgroup']."</td>
               <td>".$result['message']."</td>
              
             
              

             <td class='edit'><a href='delreq.php?fn=$result[fullname]' onclick = 'return confirmDelete()'>Delete</a></td>
            </tr>";
  }
}else{
  echo "<script>window.alert('No Data Found!!')</script>";
}

?>
            
            
          </tbody>
        </table>
      </div>
    </section>
    <script>
 function confirmDelete() {
  return confirm("Are you sure want to delete this data?");
}
function confirmLogOut() {
  return confirm("Are you sure want to Log Out?");
}
</script>
  </body>
</html>
