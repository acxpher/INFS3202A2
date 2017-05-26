<?php
include'header.php';
require'account/checkLoginStatus.php';
?>


<div class="container">
    <div class="row">

        <?php
        require 'account/dbfunction.php';
                ?>
<?php
                        echo "<br/> <br/> <br/> <h1><center>";
                        echo "Welcome Back! " .$basicinfo[1];
                        echo "</center></h1><br/><br/>";
                        ?>
                          <div class="col-lg-11">
                       <div  style="margin-left:45%;text-alien:left">
                    <a class="btn btn-default" href="product.php">View products</a></br></br>
                    <a class="btn btn-default" href="checkout.php">View my cart</a></br></br>
                    <a class="btn btn-default" href="editacc.php?edit=<?php echo $basicinfo[0]?>">Update Account</a><space></br></br>
                    <a class="btn btn-default" href="logout.php">Log out</a><br/></br>
                      <br/><br/><br/><br/>
                      </div>

                    </div>

                </div>
    </div>
<?php include'footer.php';?>
