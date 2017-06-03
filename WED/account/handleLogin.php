<?php
//start a session
 session_start();
 require  'dbfunction.php';

 $con = getDbConnect(); // invoke the getDbConnect() function to get a database connection
 $email    = $_POST["email"];
 $password = $_POST["password"]; // retrieve the password from login form


if (!mysqli_connect_errno($con)) { // connection to database is successful
  $sql="SELECT * FROM accounts WHERE email=? AND password=AES_ENCRYPT(?,?)";
  //AES_ENCRYPT(?,'infs3202')
  $stmt = $con->prepare($sql);
  $stmt->bind_param("sss",$emailpost,$pwpost,$key);
  //AES_ENCRYPT('$pwpost','st2220')
  $emailpost =$email;
  $pwpost = $password;
  $key      ="infs3202";

  $stmt->execute();
  $result = $stmt->get_result();
  $count = $result->num_rows;
//$sqlQueryStr = "SELECT * FROM accounts WHERE email = '$email' AND password = AES_ENCRYPT('$password','st2220') ";
//"AND AB.password = AES_ENCRYPT('$password','st2220')";//encrypt password
// execute the SQL query

 // fetch the record
      if($row = $result->fetch_array()){
          $_SESSION["basicinfo"] = $row; // put the record into the session
        //$_SESSION['loggedin'] = true;
      header('Location: ../welcome.php');
     // redirect to the homepage.
    } else {

      header('Location: ../account.php'); // redirect to the login page.
    }
    mysqli_close($con); // close database connection
  }else {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


?>

<!---->
