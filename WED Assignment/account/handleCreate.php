
        <?php
        //require 'checkAdminLoginStatus.php';
        require 'dbfunction.php';
        //include 'adminHeaderMenu.php';

        $con       = getDbConnect();
        $fname     = $_POST["f_name"];
        $lname     = $_POST["l_name"];
        $email     = $_POST['email'];
        $mobile    = $_POST['mobile'];
        $gender    = $_POST['radio'];
        $password  = $_POST['password'];
        $cpassword = $_POST['cpassword'];
       ?>

        <div class="container">
                <div class="row">
        <?php

        if ($password != $cpassword) {
            header('Location: ../account.html');
        }
        if (!mysqli_connect_errno($con)) {
            mysqli_query($con, "Insert into accounts(email,fname,lname,mobile,gender,password) "
                    //. " VALUES('$loginid','$name',AES_ENCRYPT('$password','st2220'))");
                    . " VALUES('$email','$fname','$lname','$mobile','$gender','$password')");
                    //. " VALUES('$email','$fname','$lname','$mobile','$password')");

            if (mysqli_affected_rows($con) > 0) {
                echo "You have successfully add an account. <br/>";
                echo "<a class='btn btn-default' href='../login.html'>Back</a>";

            } else {
                echo "Something went wrong. Please try again.</div>";
                echo "<a class='btn btn-default' href='../login.html'>Back</a>";
            }
            mysqli_close($con);
        }
        ?>
