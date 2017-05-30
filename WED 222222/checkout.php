<?php
require 'account/checkLoginStatus.php';
include 'header.php';
require 'account/dbfunction.php';
?>

<?php
$total=0;
$pay="";
$total_dollar="";
$pay_dollar="";
$con = getDbConnect();
	if (mysqli_connect_errno($con)) {
					 "Failed to connect to MySQL: " . mysqli_connect_error();
			 } else {
					 $result = mysqli_query($con, "SELECT * FROM cart");
					while ($item= mysqli_fetch_array($result)) {
						$total += $item["1"];
					  $total_dollar='$'.$total;
						$pay=$total*0.9+150;
						$pay_dollar='$'.$pay;
					}}
					 ?>

<!-- check out -->
<div class="container">
	<div class="check-sec">

		<div class="col-md-3 cart-total">
			<a class="continue" href="product.php">Continue to shop</a>
			<div class="price-details">
				<h3>Price Details</h3>
				<span>Total</span>
				<span class="total1"><?php echo $total_dollar?> </span><br/>
				<span>Discount</span>
				<span class="total1">10%(Festival Offer)</span>
				<span>Delivery Charges</span>
				<span class="total1">$50.00</span>
				<div class="clearfix"></div>
			</div>
			<ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>
			   <li class="last_price"><span><?php echo $pay_dollar ?></span></li>
			</ul>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<a class="order" href="email/handleorder.php">Place Order</a>
			<div class="total-item">
				<h3>OPTIONS</h3>
				<h4>COUPONS</h4>
				<a class="cpns" href="#">Apply Coupons</a>
			</div>
		</div>

<!---checkout area>
<!--------->
		<div class="col-md-9 cart-items">
			<h1>My Shopping Cart </h1>

				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});
					});
			   </script>

	 <?php

	 	if (mysqli_connect_errno($con)) {
	 					 "Failed to connect to MySQL: " . mysqli_connect_error();
	 			 } else {
	 					 $result = mysqli_query($con, "SELECT * FROM cart");

					 while ($cart= mysqli_fetch_array($result)) {
						 $name=$cart["name"];
						 $price=$cart["price"];
						 $quantity=$cart["quantity"];
						 $image=$cart["image"];
						 $buyer=$cart["buyer"];
?>
				<div class="cart-header">
						<div class="close1"><a class="btn btn-default" href="delcart.php?del=<?php echo $name ?>">Remove</a> </div>
							<div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
								<img src="<?php echo $image?>" class="img-responsive" alt=""/>
								</div>
							  <div class="cart-item-info">
							  <h3><?php echo $name ?><span> <?php echo $price ?></span></h3>
								<ul class="qty">
								<li><p><?php echo $quantity ?></p></li>
								</ul>
								<div class="delivery">
								<p>Service Charges : Rs.100.00</p>
								<span>Delivered in 2-3 bussiness days</span>
								<div class="clearfix"></div>
								</div>
								</div>
								<div class="clearfix"></div>

</div>
</div>

 <?php
}
	 mysqli_close($con); }
 ?>
</div>
</div>
</div>

<?php
include 'footer.php'
?>
