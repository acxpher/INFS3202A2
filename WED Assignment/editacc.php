<?php
include'header.php';
require'account/checkLoginStatus.php';
require'account/dbfunction.php';
?>

<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>Update Account Information</h2>
			 <!-- [if IE]
				< link rel='stylesheet' type='text/css' href='ie.css'/>
			 [endif] -->

			 <!-- [if lt IE 7]>
				< link rel='stylesheet' type='text/css' href='ie6.css'/>
			 <! [endif] -->
			 <script>
				(function() {

				// Create input element for testing
				var inputs = document.createElement('input');

				// Create the supports object
				var supports = {};

				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;

				// Fallback for autofocus attribute
				if(!supports.autofocus) {

				}

				// Fallback for required attribute
				if(!supports.required) {

				}

				// Fallback for placeholder attribute
				if(!supports.placeholder) {

				}

				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}

			 })();
			 </script>
			 <div class="registration_form">
			 <!-- Form -->
<?php

               $con = getDbConnect();
               $email = $_GET['edit'];

               if (mysqli_connect_errno($con)) {
                   "Failed to connect to MySQL: " . mysqli_connect_error();
               } else {
                   $result = mysqli_query($con, "SELECT * FROM accounts where email = '$email'");

                   while ($info = mysqli_fetch_array($result)) {
?>


				<form form action="account/handleEdit.php" class="form-horizontal" method="post">
          <div>
						<label>
							<input placeholder="email address" type="email" name="email" value="<?php echo $info[0]?>" >
						</label>
					</div>
					<div>
						<label>
							<input type="text" tabindex="2" name="fname" value="<?php echo $info[2]?>">
						</label>
					</div>
					<div>
						<label>
							<input  type="text" tabindex="2" name="lname" value="<?php echo $info[1]?>">
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Mobile" type="text" tabindex="3" name="mobile" value="<?php echo $info[3]?>">
						</label>
					</div>

					<div>
						<label>
							<input placeholder="" type="password" tabindex="4" name="password" value="<?php echo $info[5]?>">
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Confirm password" type="password" tabindex="4" name="cpassword" value="<?php echo $info[5]?>">
						</label>
					</div>
					<div>
						<input type="submit" value="Update Account" >
					</div>
				</form>
        <?php
          }
          mysqli_close($con);
      }
      ?>
				<!-- /Form -->
			 </div>
		 </div>

		 <div class="clearfix"></div>
	 </div>
</div>

<?php include'footer.php' ;?>