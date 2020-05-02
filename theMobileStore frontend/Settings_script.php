<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id ='$user_id';";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
$username = $row['name'];
$password = $row['password']; 
}


$cur_password=md5($_POST['oldpass']);
$password1=md5($_POST['newpass']);
$password2=md5($_POST['cnfpass']);


if (empty ($_POST['oldpass'])){
echo "Fill out all fields.";
}
else if ($cur_password != $password) {
echo "There was a problem. Wrong Password.";
} else if ($password1 != $password2) {
echo "Passords don't match.";
} else {
$sql = "UPDATE users SET password = MD5('$password1') WHERE id ='$user_id' LIMIT 1";
$query = mysqli_query($con, $sql);
echo "Success! Password has been changed.";
}