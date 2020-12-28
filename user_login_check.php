<?php
	include 'connection.php';
	session_start();

	$email = $_GET['email'];
	$password = $_GET['password'];

	$data = mysqli_query($con,"SELECT * FROM user WHERE email_address = '$email' AND password = '$password'") or die (mysqli_error($data));
	$row = mysqli_fetch_object($data);

	$check = mysqli_num_rows($data);

	if ($check > 0) {
		$_SESSION['email'] = $email;
		$_SESSION['status'] = "login";
		header("location:view_user.php");
	}
	else{
		header("location:login.php?message=error");
	}
?>