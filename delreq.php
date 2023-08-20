<?php
include("Connection.php");
$fullname = $_GET['fn'];
$query2 = "DELETE FROM request WHERE fullname='$fullname'";
$data2 = mysqli_query($conn,$query2);
if($data2){
 ?>
    <meta http-equiv="refresh" content="0; URL=http://localhost/projectI/requestpanel.php" />

    <?php
}


?>