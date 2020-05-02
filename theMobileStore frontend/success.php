<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$str = $_GET['id'];
$arr = explode(",", $str);

$string = "confirmed";
for ($i = 0; $i < sizeof($arr); $i++) {

    $update_query = "UPDATE user_items SET status = '2' WHERE item_id = " . $arr[$i] . " ; ";
    $res = mysqli_query($con, $update_query) or die(mysqli_error($con));
}
?>
<!DOCTYPE html> 
<head> 

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <title>Thank you | The Mobile Store</title> 
</head> 
<body> 
    <?php include 'includes/header.php'; ?>

    <div class="container" style=" margin-top: 75px ;">
        <div class="jumbotron">

            <p>Your order is confirmed. Thank you for shopping with The Mobile Store. <a href="home.php">Click here</a> to purchase any other item.</p>
        </div>
    </div>	

    <?php include 'includes/footer.php'; ?>
</body> 
</html>