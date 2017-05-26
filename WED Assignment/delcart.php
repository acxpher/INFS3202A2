<?php

require 'account/dbfunction.php';
require 'account/checkLoginstatus.php';
$name=$_GET["del"];

$con  =  getDbConnect();

if (mysqli_connect_errno($con)) {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
         mysqli_query($con, "DELETE FROM cart WHERE name='$name'");

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
