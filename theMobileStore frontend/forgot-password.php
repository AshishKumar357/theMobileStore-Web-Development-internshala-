<?php
require 'includes/common.php';
?> 

<!DOCTYPE html> 
<head> 
    <?php include 'includes/common.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <title>Password Recovery</title> 
</head> 
<body style="margin-top: 50px;"> 
    <?php include 'includes/header.php'; ?>

    <div class="container" style=" margin-top: 100px ;">
        <div class="row row_style   ">
            <div class="col-xs-offset-3 col-xs-6">

                <div style="margin-top: 50px;">
                    <h1><b>Forgot Password???</b></h1>
                </div>

                <div>
                    <form method="POST" action="Forgot_script.php" style="margin-top: 50px;">
                        <div class="form-group">
                            <input type="text"  class="form-control " id="emailfor" name="emailfor" placeholder="Enter Registered Email">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary form-control" type="submit" value="Request Password via Email">
                        </div>
                    </form>
                </div>

                <div style="margin-top: 50px; margin-bottom: 220px;">Don't Have a account? <a href="signup.php">Register </a></div>

            </div>
        </div>
    </div>


    <?php include 'includes/footer.php'; ?>
</body> 
</html>