<?php 
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
require 'includes/common.php' ?>
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
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <title>Signup | The Mobile Store</title> 
    </head> 
    <body style="margin-top: 60px;"> 
        <?php include 'includes/header.php' ?>

        <div class="container">
            
             <div class="row" >
                 <div class="col col-xs-6 text-center" style="margin-top: 20px;">
                    <img src="images/mobile-phones.png" alt="mobile phones" style="max-width: 100%; min-height: 120%;" >
                </div>
            
                 <div class="col col-xs-6" style=" margin-bottom: 150px;">
                    <form method="POST" action="Signup_script.php">
                        <div class="form-group">
                            <h2><b>SIGN UP</b></h2>
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control " name="Name" id="Name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email"  class="form-control " name="Email" id="Email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control " name="Password" id="Password" placeholder="Password" required pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control " name="Contact" id="Contact" placeholder="Contact" pattern="[789][0-9]{9}" required>
                        </div>

                        <div class="form-group">
                            <input type="text"  class="form-control " name="City" id="City" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control " name="Address" id="Address" placeholder="Address" required>
                        </div>
                        <div class="form-group" style="float: right;">
                            <input class="btn btn-primary" type="submit" name="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <?php require 'includes/footer.php'; ?>
            
    </body> 
</html>
