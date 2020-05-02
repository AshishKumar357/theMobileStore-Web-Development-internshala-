<?php

require 'includes/common.php';

$email = $_POST['Email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
    echo "Incorrect email";
}
$password = $_POST['Password'];
if (strlen($password) < 6) {
    echo "Password should have at-least 6 characters";
}
$phonenumber = $_POST['Contact'];
$regex_phno = "/^[789][0-9]{9}/";
if (!preg_match($regex_phno, $phonenumber)) {
    echo "Enter a valid Phone number";
}
$name = $_POST['Name'];
$city = $_POST['City'];
$address = $_POST['Address'];

$emailesc = mysqli_real_escape_string($con, $email);
$passwordesc = md5(mysqli_real_escape_string($con, $password));
$nameesc = mysqli_real_escape_string($con, $name);
$cityesc = mysqli_real_escape_string($con, $city);
$addressesc = mysqli_real_escape_string($con, $address);


$select_q = "SELECT id FROM users WHERE email='$email';";
$res = mysqli_query($con, $select_q) or die(mysqli_error($con));
if (mysqli_num_rows($res)) {
    echo' Error: Email already exists';
} else {
    $insert_q = "insert into users(name, email, password, contact, city, address) values ( '$nameesc','$email', '$passwordesc', '$phonenumber','$cityesc', '$addressesc')";
    mysqli_query($con, $insert_q) or die(mysqli_error($con));
    $_SESSION['user_id']= mysqli_insert_id($con);
    $_SESSION['email']=$email;
    header("Location: home.php");
}