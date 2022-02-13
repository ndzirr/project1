<?php

require "config/constants.php";

$servername = "localhost";
$username = "project1_nadzir1";
$password = "UdU}O+t!F&r=";
$db = "project1_ecommerceapp";


$con = mysqli_connect($servername, $username, $password,$db);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>