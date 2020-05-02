<?php
require 'includes/common.php';
$email=$_POST['emailfor'];
$email_check=mysqli_query($con,"SELECT password FROM users WHERE email='$email'");
$count=mysqli_num_rows($email_check);
$subject="Login Info";
$message="Your password is .$count";
$from="From: cj_reonz@yahoo.com";

mail($email, $subject, $message, $from);
die ('your password has been email to you');

?>

