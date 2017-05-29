

<?php

//start a session
 session_start();
 require "checkLoginStatus.php";
 require  'dbfunction.php';
 $email    =$_POST["email"];
 $password =$_POST["password"]; // retrieve the password from login form

$con = getDbConnect(); // invoke the getDbConnect() function to get a database connection
if (!mysqli_connect_errno($con)) { // connection to database is successful

$sqlQueryStr = "SELECT * FROM accounts A WHERE A.email='$email'AND A.password=AES_ENCRYPT('$password','3202')";

            //"AND AB.password = AES_ENCRYPT('$password','st2220')";//encrypt password

$result = mysqli_query ($con, $sqlQueryStr); // execute the SQL query


if ($row = mysqli_fetch_array($result)) { // fetch the record
        $_SESSION["basicinfo"] = $row; // put the record into the session
        //$_SESSION['loggedin'] = true;

        header('Location: ../welcome.php'); // redirect to the homepage.
    } else {
        header('Location: ../login.php'); // redirect to the login page.

    }
    mysqli_close($con); // close database connection
} else {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!---->
