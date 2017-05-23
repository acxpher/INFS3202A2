<html>
<head>
</head>
<body>
<div class="header-top">
	 <div class="header-bottom">
				<div class="logo">
					<h1><a href="index.html">MARVEL</a></h1>

				</div>
			 <!---->
			 <div class="top-nav">
				<ul class="memenu skyblue"><li><a href="index.html">Home</a></li>
					<li class="grid"><a href="news.html">News</a></li>
					<li class="grid"><a href="product.html">Products</a></li>
					<li class="grid"><a href="contact.html">Contact</a></li>
				</ul>
				<div class="clearfix"> </div>
			 </div>
			 <!---->
			 <div class="cart box_1">
				 <a href="checkout.html">
					<div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
			 	<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 <!---->
			 </div>
			<div class="clearfix"> </div>
</div>

<?php

//start a session
session_start();
 require  'dbfunction.php';
 $email    =$_POST["email"];
 $password =$_POST["password"]; // retrieve the password from login form

$con = getDbConnect(); // invoke the getDbConnect() function to get a database connection
if (!mysqli_connect_errno($con)) { // connection to database is successful

    $sqlQueryStr = "SELECT A.fname ".
            "FROM accounts A ".
            "WHERE A.email = '$email' ".
            //"AND AB.password = AES_ENCRYPT('$password','st2220')";//encrypt password
            "AND A.password = '$password'";

    $result = mysqli_query ($con, $sqlQueryStr); // execute the SQL query


if ($row = mysqli_fetch_array($result)) { // fetch the record
        $_SESSION["basicinfo"] = $row; // put the record into the session
        //$_SESSION['loggedin'] = true;

        header('Location: ../index.html'); // redirect to the homepage.
    } else {
        header('Location: ../login.html'); // redirect to the login page.

    }
    mysqli_close($con); // close database connection
} else {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-3 about-us">
				 <h3>About Us</h3>
				 <p>Maecenas nec auctor sem. Vivamus porttitor tincidunt elementum nisi a, euismod rhoncus urna. Curabitur scelerisque vulputate arcu eu pulvinar. Fusce vel neque diam</p>
			 </div>
			 <div class="col-md-3 ftr-grid">
					<h3>Information</h3>
					<ul class="nav-bottom">
						<li><a href="#">Track Order</a></li>
						<li><a href="#">New Products</a></li>
						<li><a href="#">Location</a></li>
						<li><a href="#">Our Stores</a></li>
						<li><a href="#">Best Sellers</a></li>
					</ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
					<h3>More Info</h3>
					<ul class="nav-bottom">
						<li><a href="login.html">Login</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>
					</ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<div class="copywrite">
	 <div class="container">
		 <div class="copy">
			 <p>A Kassa's production<a href="http://www.google.com/" target="_blank" title="Kassa"></a>
		 </div>
		 <div class="social">
				<a href="#"><i class="facebook"></i></a>
				<a href="#"><i class="twitter"></i></a>
				<a href="#"><i class="dribble"></i></a>
				<a href="#"><i class="google"></i></a>
				<a href="#"><i class="youtube"></i></a>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
</body>
</html>
