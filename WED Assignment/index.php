<?php include 'header.php' ?>

<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>


<!---->
<div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				 <div class="banner1">
					  <div class="banner-info">
					  <h3>The Avengers will be forced to make a choice.</h3>
					  <p>Political interference in the Avengers' activities causes a rift between former allies Captain America and Iron Man.</p>
					  </div>
				 </div>
	         </li>
	         <li>
				 <div class="banner2">
					 <div class="banner-info">
					 <h3>Deadpool's second film is in progress.</h3>
					 <p>A fast-talking mercenary with a morbid sense of humor is subjected to a rogue experiment that leaves him with accelerated healing powers and a quest for revenge.</p>
					 </div>
				 </div>
			 </li>
	         <li>
	             <div class="banner3">
	        	 <div class="banner-info">
	        	 <h3>Guardians of the Galaxy Vol. 2</h3>
	          	 <p>Set to the backdrop of Awesome Mixtape #2, the film continues the team's adventures as they unravel the mystery of Peter Quill's true parentage.</p>
				 </div>
				 </div>
	         </li>
	      </ul>
	  </div>
  </div>
<!---->
<script src="js/bootstrap.js"> </script>

<div class="copyrights">Done by Kassa</a></div>


<!---->

<!---->
<?php include'footer.php' ?>
