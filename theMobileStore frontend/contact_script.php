<?php
require 'includes/common.php';
$name= $_POST['namecontact'];
$email = $_POST['emailcontact'];
$message=mysqli_real_escape_string($con, $_POST['messagecontact']);

$query = "INSERT INTO message(name,email,message) VALUES ('$name','$email','$message');";
mysqli_query($con, $query) or die(mysqli_error($con));
header("Location: home.php");