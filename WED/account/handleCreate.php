  <?php
    //require 'checkLoginStatus.php';
    require 'dbfunction.php';
    //include 'adminHeaderMenu.php';
    $con       = getDbConnect();


        $fname     =  $_POST["f_name"];
        $lname     =  $_POST["l_name"];
        $email     =  $_POST['email'];
        $mobile    =  $_POST['mobile'];
        $gender    =  $_POST['radio'];
        $password  =  $_POST['password'];
        $cpassword =  $_POST['cpassword'];


        if ($password != $cpassword) {
            header('Location: ../account.php');
        }
        if (!mysqli_connect_errno($con)) {
          $stmt = $con->prepare("INSERT INTO accounts (email,fname,lname,mobile,gender,password)".
          "VALUES(?,?,?,?,?,AES_ENCRYPT(?,?))");
          $stmt->bind_param("sssssss",$emailpost,$fnamepost,$lnamepost,$mobilepost,$gender,$pwpost,$key);
          $emailpost=$email;
          $fnamepost=$fname;
          $lnamepost=$lname;
          $mobilepost=$mobile;
          $genderpost=$gender;
          $pwpost =$password;
          $key       ='infs3202';



          $stmt->execute();

          //$result = $stmt->get_result();
              //mysqli_query($con, "Insert into accounts(email,fname,lname,mobile,gender,password) "
                    //. " VALUES('$loginid','$name',AES_ENCRYPT('$password','st2220'))");
                //    . " VALUES('$email','$fname','$lname','$mobile','$gender',AES_ENCRYPT('$password','st2220'))");
                    //. " VALUES('$email','$fname','$lname','$mobile','$password')");
                    if (mysqli_affected_rows($con) > 0) {

                      echo'   <script>';
                      echo"   alert('Account Created')";
                      echo'   </script>';
                          } else {

                     echo'   <script>';
                     echo"   alert('Account Not Created')";
                     echo'   </script>';
                  }
                  ?>
                  <script>
                  window.location.href = "../login.php";
                  </script>

              <?php
              }
              mysqli_close($con);
              ?>
