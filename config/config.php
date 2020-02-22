<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Dhaka");
$connection = new mysqli("localhost","root","","news") or die(mysqli_connect_error($connection));
// print_r( $connection);
// die();