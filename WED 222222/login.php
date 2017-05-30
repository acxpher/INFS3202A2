<?php include'header.php';
?>

<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 log">
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously Login with us, <span>click here</span></p>

         <form action="account/handleLogin.php"  method="post">
					 <h5>Account email</h5>
					 <input type="text" name="email">
					 <h5>Password</h5>
					 <input type="password" name="password">
					 <input type="submit" value="Login">
						<a class="acount-btn" href="account.php">Create an Account</a>
				 </form>
				 <a href="#">Forgot Password ?</a>

		 </div>

		 <div class="clearfix"></div>
	 </div>
</div>
<!---->


<?php include'footer.php' ;?>
