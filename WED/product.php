<?php
include'header.php';
require'account/dbfunction.php';
require'account/getdbfunction.php';
?>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->

<body>
<!--header-->

<div class="product-model">
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Products</li>
		 </ol>
			<h2>Our Products</h2>
		 <div class="col-md-9 product-model-sec">

			 <?php

		 	$con=getDbConnect();
		 	$ProductArr= getproduct($con);

			foreach($ProductArr as $q => $x){


	      echo '<div class="product-grid">';
			  echo ' <div class="more-product"><span> </span></div>';
			 	echo '		<div class="product-img b-link-stripe b-animate-go  thickbox">';
				echo "  <img class='img-responsive' alt='' src='".$x["image"]."'>";
				echo '			<div class="b-wrapper">';
				echo '			<h4 class="b-animate b-from-left  b-delay03">';
				echo '			<button ><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Quick View</button>';
				echo '			</h4></div></div>';
				echo '		<div class="product-info simpleCart_shelfItem">';
			 	echo '			<div class="product-info-cust prt_name">';
				echo '      <span class="item_price" style="text-align:center">'.$x["name"].'</span>';
				echo '			<span class="item_price">Price: $'.$x["price"].'</span><br/>';
				echo '			<div class="ofr">';
				echo '			  <p class="pric1"><del>Original Prize $50</del></p>';
				echo '	          <p class="disc">[20% Off]</p>';
				echo '			</div>';
				?>
				<input type="text" class="item_quantity" name="quantity" value="1" />
				<a class="item_add items" href="addcart.php?add=<?php echo $x["name"]?>" value="ADD">Add </a>
        <?php
				echo '<div class="clearfix"> </div> </div></div></div>';
					}
					mysqli_close($con);
			?>
				</div>


			<div class="rsidebar span_1_of_left">
				 <sections>
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Series</h4>
						 <div class="tab1">
							 <ul class="place">
								 <li class="sort">Captain America</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">

									<a href="#"><p>Captain America: The Winter Soldier</p></a>
									<a href="#"><p>Captain America: Civil War</p></a>
						     </div>
					      </div>
						  <div class="tab2">
							 <ul class="place">
								 <li class="sort">Iron Man</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
									<a href="#"><p>Iron Man</p></a>

						     </div>
					      </div>
						  <div class="tab3">
							 <ul class="place">
								 <li class="sort">Guardians of the Galaxy</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
									<a href="#"><p>Guardians of the Galaxy</p></a>
									<a href="#"><p>Guardians of the Galaxy vol.2</p></a>
						     </div>
					      </div>

						  <div class="tab4">
							 <ul class="place">
								 <li class="sort">Thor</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
									<a href="#"><p>Thor</p></a>
									<a href="#"><p>Thor: The Dark World</p></a>
						     </div>
					      </div>

				 	</div>
	      </div>

		</div>
	</div>
<!---->

<?php include 'footer.php' ?>
