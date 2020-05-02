<?php

require 'includes/common.php';
$email1 = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email1)) {
    die("Incorrect email <br>");
}
$password1 = $_POST['password'];
if (strlen($password1) < 6) {
    die("Password should have at-least 6 characters <br>");
}

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5(mysqli_real_escape_string($con, $_POST['password']));

$select_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$res = mysqli_query($con, $select_query) or die(mysqli_error($con));
if (mysqli_num_rows($res)) {
    $row = mysqli_fetch_array($res);
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];

    if ($password == $row['password']){
    header("Location: home.php");
    }
} else {
    echo ' Error: Email or password is invalid';
}
   
    

    
    