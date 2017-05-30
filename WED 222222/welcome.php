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
              echo "Welcome Back! <br/>" .$basicinfo[2];
              echo "</center></h1>";
                        ?>
<div >
    <div  style="margin-left:28%;text-alien:left">
             <section id="welcome">
    <a class="btn btn-lg btn-default hidden-xs" href="product.php">View products</a></br>
    <a class="btn btn-lg btn-default hidden-xs" href="checkout.php">View my cart</a></br>
    <a class="btn btn-lg btn-default hidden-xs" href="editacc.php?edit=<?php echo $basicinfo[0]?>">Update Account</a></br>
    <a class="btn btn-lg btn-default hidden-xs" href="logout.php">Log out</a><br/>

             </section>
                      <br/><br/><br/><br/>
                      </div>

                    </div>

                </div>
    </div>
<?php include'footer.php';?>
