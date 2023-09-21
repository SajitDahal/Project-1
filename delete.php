<?php
include("Connection.php");
$name = $_GET['n'];
$query = "DELETE FROM donor WHERE name='$name'";
$data = mysqli_query($conn,$query);

if($data){
 ?>
    <meta http-equiv="refresh" content="0; URL=http://localhost/project1/admin.php" />

    <?php
}

?>

