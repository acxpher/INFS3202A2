<?php
define('STATUS_ACTIVE',0);
define('STATUS_DELETE',0);


function getproduct($con) {
    $product = array();
    if (mysqli_connect_error($con)) {
        echo"fail" . mysqli_connect_error();
    } else {
        $mysqli_result = mysqli_query($con, "SELECT P.image, P.name,P.price "
                . " FROM products P");
        while ($row = mysqli_fetch_array($mysqli_result)) {
            $product[] = $row;

        }
        return $product;
    }
}

function getcart($con) {
    $cart = array();
    if (mysqli_connect_error($con)) {
        echo"fail" . mysqli_connect_error();
    } else {
        $result = mysqli_query($con, "SELECT C.code,C.name,C.price,C.image,C.quantity "
                . " FROM cart C");
        while ($row = mysqli_fetch_array($result)) {
            $cart[] = $row;
        }
        return $cart;
    }
}





/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
