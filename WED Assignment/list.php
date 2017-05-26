<html>
    <body
<?php
           require_once'DBCNY.php';

           require_once 'dbfunction.php';


        $con=getDbConnect();
        $ProductArr= getproduct($con);


                    $a = $_GET['title'];
                    $i = 0;
                    foreach($ProductArr as $q => $x){
                        if ($x["title"] == $a){

                                if ($i % 3 == 0){
                                    echo '</ul><ul id="catLink" class ="nav navbar-nav">';
                                }
                                $i++;
                                echo '<li >';
                                echo "<a  href ='PCollectionItem.php?title=".$x["title"]."&name=".$x["name"]."'>";
                                echo $x["name"].'<br><br>';
                                echo "<img src='../images/".$x["image"]."><br><br>";
                                 echo'<center>';
                                echo ''.$x["price"].'<br><br><br><br>';

                                 echo'</center>';


            ?>

                        <a class="btn btn-default" href="editproduct1.php?edit=<?PHP echo $x['name'] ?>">Update </a>
                        <a class="btn btn-default" href="delproduct1.php?delete=<?php echo $x['name'] ?>">Delete</a>
                 <?php
                                echo'<br><br><br><br><br>';

                                echo '</li>';

                        }
                    }
        ?>
        </div>

    </body>
</html>
