<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// start a session
session_start();

if (isset($_SESSION["basicinfo"])) { // basicinfo exist in session
    $basicinfo = $_SESSION["basicinfo"]; // get basicinfo from session
} else {
    header('Location: login.php'); // redirect to the login page.
}
?>
