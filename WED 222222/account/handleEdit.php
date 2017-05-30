<?php
      require 'checkLoginStatus.php';
      require 'dbfunction.php';
      $con = getDbConnect();

      $email      =$_POST["email"];
      $fname      =$_POST["fname"];
      $lname      =$_POST["lname"];
      $mobile     =$_POST["mobile"];
      $password   =$_POST["password"];
      $cpassword  =$_POST["cpassword"];


      if ($password != $cpassword) {
          echo "<script>";
          echo "alert('Password not matching')";
          echo "</script>";
        }

      if (!mysqli_connect_errno($con)) {

        $stmt = $con->prepare("UPDATE accounts SET fname=?, lname=?, mobile=?,password=AES_ENCRYPT(?,?) WHERE email = ?");
        $stmt->bind_param("ssssss",$fnamepost,$lnamepost,$mobilepost,$pwpost,$key,$emailpost);
        $fnamepost=$fname;
        $lnamepost=$lname;
        $mobilepost=$mobile;

        $pwpost =$password;
        $emailpost =$email;
        $key='infs3202';

        $stmt->execute();
        $result = $stmt->get_result();

          if (mysqli_affected_rows($con) > 0) {

            echo'   <script>';
            echo"   alert('Account Updated')";
            echo'   </script>';
                } else {

           echo'   <script>';
           echo"   alert('Account Update Failed')";
           echo'   </script>';
        }
        ?>
        <script>
        window.location.href = "../welcome.php";
        </script>


    <?php
  }
  mysqli_close($con);
  ?>
