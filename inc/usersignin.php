<?php

include ('connection.php');

echo $email = $_POST['email'];

echo $pass = $_POST['pass'];


$user_select = mysqli_query($connect, "SELECT * FROM user_info WHERE user_email = '$email' AND pass = '$pass'");

$admin_data = mysqli_num_rows($user_select);

// $admin_fatch = mysqli_fatch_array($admin_data)

if($admin_data == 1){
    // header('location: ../pages/home.php');
    echo 'OK';
}elseif($admin_data == 0){
    echo "Something Worng";
    // header('location: ../index.php?result=somethingwrong');
}
