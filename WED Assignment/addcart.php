<?php include 'header.php';

require 'account/dbfunction.php';
require 'account/checkLoginstatus.php';
$name=$_GET["add"];

$con  =  getDbConnect();


if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    $result = mysqli_query($con, "SELECT * FROM products WHERE name='$name'");
      while ($info = mysqli_fetch_array($result)) {
?>
<?php
                      $productname=$info["name"];
                      $price=$info["price"];
                      $image=$info["image"];
                      $buyer=$basicinfo[0];
                      echo "<br/><h3><center>";
                      echo "<ulProduct Name : <strong>" .$productname . "&nbsp&nbsp</strong></ul><br/>";
                      echo "<ul>Price : <strong>$" .$price . "</strong></ul><br/>";
                      echo "<br/></center></h3>";

}          mysqli_query($con, "INSERT INTO cart (name,price,image,quantity,buyer) "
                  . " VALUES('$productname','$price','$image',1,'$buyer')");

          if (mysqli_affected_rows($con) > 0) {
              echo "<h3><center>";
              echo "You have added  <strong>< ".$productname." > </strong> to your cart. <br/><br/> ";
              echo "<a href='product.php'>Continue Shopping&nbsp&nbsp&nbsp</a>";
              echo "<a href='checkout.php'>To Checkout </a>";
              echo "<br/><br/><br/></center></h3>";
          } else {
               echo "<br/><h3><center>";
               echo "Add failed. Please try again.";
               echo "<a href='product.php'>Back</a>";
               echo "<br/><br/><br/></center></h3>";

          }
          mysqli_close($con);
      }

?>







<?php include 'footer.php';?>
