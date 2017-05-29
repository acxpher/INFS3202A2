<?php
      require 'checkLoginStatus.php';
      require 'dbfunction.php';

      $con = getDbConnect();
      $email      =$_POST["email"];
      $fname      =$_POST["fname"];
      $lname      =$_POST["lname"];
      $mobile     =$_POST["mobile"];
      $password   =$_POST['password'];
      $cpassword  =$_POST['cpassword'];

      if ($password != $cpassword) {
          echo "<script>";
          echo "alert('Password not matching')";
          echo "</script>";
      }

      if (!mysqli_connect_errno($con)) {

          mysqli_query($con, "UPDATE accounts SET fname='$fname', lname='$lname', mobile='$mobile',password='$password' WHERE email = '$email'");

          if (mysqli_affected_rows($con) > 0) {

            echo"   <script>";
            echo"   alert('Account Updated')";
            echo"   </script>";
                } else {

          echo"   <script>";
          echo"   alert('Account Update Failed')";
          echo"   </script>";
        }
        ?>
        <script>
        window.location.href = "../welcome.php";
        </script>

    <?php
  }
  mysqli_close($con);
  ?>
