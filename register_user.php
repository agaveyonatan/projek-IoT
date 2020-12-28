<?php
    include 'connection.php';
    $inputUsername = $_POST['inputUsername'];
    $inputEmail = $_POST['inputEmail'];
    $inputPassword = $_POST['inputPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    $searchUser = mysqli_query($con,"SELECT * FROM user WHERE email_address = '$inputEmail'") or die (mysqli_error($searchUser));
    $checkUser = mysqli_num_rows($searchUser);
    if($checkUser > 0){
        sleep(2);
        header("location:register.php?message=doubleUser", true, 303);
        exit;
    }
    else{
        $data = mysqli_query($con,"INSERT INTO user VALUES('', '$inputUsername','$inputEmail','$inputPassword','$confirmPassword')");
        sleep(2);
        header("location:login.php", true, 303);
        exit;
    }
?>