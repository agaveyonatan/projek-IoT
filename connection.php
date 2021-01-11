<?php
	$hostname = 'localhost';
    $username = "root";
    $password = "";
    $database = "iot_ultrasonic";
	$con = mysqli_connect($hostname,$username,$password,$database) or die(mysqli_error());
?>