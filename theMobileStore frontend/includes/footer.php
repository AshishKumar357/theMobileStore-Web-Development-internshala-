<!DOCTYPE html> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Lifestyle Store</title> 
</head> 
<body>
    <footer>
                <div class="container ">
                    <div class="col  col-sm-6 col-md-4">
                        <h3><b style="color: white;">Information</b></h3>
                        <h5><a style="color: #F8F9F9;" href="aboutus.php" >About Us</a></h5>
                        <h5><a style="color: #F8F9F9;" href="contactus.php">Contact Us</a></h5>
                        
                    </div> 
                    <div class="col col-sm-6 col-md-4">
                        <h3 style="color: white;"><b>My Account</b></h3>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <h5><a style="color: #F8F9F9;" href="" data-toggle="modal" data-target="#modalLoginForm" >Login</a></h5>
                        <a style="color: #F8F9F9;" href="aboutus.php" >Signup</a>
                        <?php } else { ?>
                            <h5><a style="color: #F8F9F9;" href="cart.php"  >My cart</a></h5>
                            <h5><a style="color: #F8F9F9;" href="setting.php" >Settings</a></h5>
                        
                        <?php } ?>
                    </div>
                    <div class="col col-sm-6 col-md-4">
                        <h3><b style="color: white;">Contact Us</b></h3>
                        <h5 style="color: #F8F9F9;">Contact: +91-123-0000000</h5>
                        
                        
                    </div>
                </div>
        </footer>

</body> 
</html>