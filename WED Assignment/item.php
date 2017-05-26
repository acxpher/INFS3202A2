<html>
    <head>
        <style>
            .hhh2{
            font-size       :25px;
            color           :black;
       }
        </style>
    </head>
    <body>
        <?php
           require_once'DBCNY.php';

           require_once 'dbfunction.php';


        $con=getDbConnect();
        $ProductArr= getproductinfo($con);

               $name = $_GET["name"];
               foreach($ProductArr as $q => $x){
                        if ($x["name"] == $name){
                echo '<center>';
                echo '<p class="hhh2"> Name: '.$name.'<br>  </p>';
                echo '<p class="hhh2"> Price: '."".$x["price"].'<br> </p>';
                echo "<img class='img' src='../images/".$x["image"]."'><br><br>";
                echo 'Specifications: <br>'.$x["spec"].'<br><br><br>';
                echo "<a  href ='contactus.php?name=".$name."'> Buy</a><br><br>";
                echo "<a  href ='PCollectionList.php?title=".$x["title"]."'> Back to previous page</a>";
                echo'<br><br><br>';
              ?>

                        <a class="btn btn-default" href="editproduct1.php?edit=<?PHP echo $x['name'] ?>">update category</a>
                        <a class="btn btn-default" href="delproduct1.php?delete=<?php echo $x['name'] ?>">Delete</a>
                 <?php
                echo '</center>';
               }}
        ?>
    </body>
</html>
