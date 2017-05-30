<?php include'header.php'; ?>
<div class="contact">
	  <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Contact</li>
		 </ol>
			<!--start contact-->
			<h3>Contact Us</h3>
		  <div class="section group">
				<div class="col-md-6 span_1_of_3">
					<div class="contact_info">
			    	 	<h4>Find Us Here</h4>

			    	 		<div id="map">
			    	 			<script async defer
							src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvKcS04MA3uxN8vWg8aLXCxE7iCYVk3Uk&callback=initMap">
							</script>

			    	 		</div>
							
      				</div>
							<div class="Developer Information">
					     	<h4>Group members:</h4>
							    	<p>Xuyuan Gao 43718919</p>
							   		<p></p>
							   		<p></p>
					   		<p>Phone:(00) 222 666 444</p>
					   		<p>Fax: (000) 000 00 00 0</p>
					 	 	<p>Email: <a href="">xxxxxxxx@gmail.com</a></p>
					   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
					   </div>
				</div>
				<div class="col-md-6 span_2_of_3">
				  <div class="contact-form">
					    <form action="email/handleSend.php" method="POST">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="name" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="phone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>MESSAGE</label></span>
						    	<span><textarea name="msg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="mybutton" value="Submit"></span>
						  </div>
					    </form>

				    </div>
  				</div>
		  </div>
	  </div>
 </div>
 <?php include'footer.php'; ?>
<!---->
