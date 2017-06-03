<?php

require 'account/dbfunction.php';
require 'account/checkLoginstatus.php';
$name=$_GET["del"];

$con  =  getDbConnect();

if (mysqli_connect_errno($con)) {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
  $stmt = $con->prepare("DELETE FROM cart WHERE name = ?");
  $stmt->bind_param("s",$productname);
  $productname= $name;

  $stmt->execute();
  $result = $stmt->get_result();



          if (mysqli_affected_rows($con) > 0) {

            echo"   <script>";
            echo"   alert('You have removed it from your cart!')";
            echo"   </script>";
          } else {
            echo"   <script>";
            echo"   alert('Removed failed. Please try again')";
            echo"   </script>";
?>
    <?php
  }
          mysqli_close($con);
      }

?>
<script>
window.location.href = "checkout.php";
</script>
