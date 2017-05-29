<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

function getDbConnect() {
    // get a database connect to studentacad database
    $con = mysqli_connect ("localhost", "root", "", "marvel");
    return $con;
};


?>
