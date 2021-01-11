<?php
	$hostname = 'localhost';
	// $username = 'dejulu_projek_iot';
	// $password = 'M)cF3,t_Qw(g';
	// $database = 'dejulu_projek_iot';
    $username = "root";
    $password = "";
    $database = "iot_ultrasonic";
	$con = mysqli_connect($hostname,$username,$password,$database) or die(mysqli_error());
?>