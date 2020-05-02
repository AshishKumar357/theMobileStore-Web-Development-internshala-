<!DOCTYPE html> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

    <title>Lifestyle Store</title> 
</head> 
<body> 
    <div class="navbar navbar-default navbar-fixed-top"> 
        <div class="container"> 
            <div class="navbar-header"> 
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </button> 
                <?php if (isset($_SESSION['email'])) { ?>
                        <a class="navbar-brand" href="home.php"><b>The Mobile Store</b></a>
                    <?php } else { ?> 
                        <a class="navbar-brand" href="index.php"><b>The Mobile Store</b></a> 
                    <?php } ?> 
                
            </div> 
            <div class="collapse navbar-collapse" id="myNavbar"> 
                <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['email'])) { ?>
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li> 
                        <li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> 
                        <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li> 
                    <?php } else { ?> 
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li> 
                        <li><a href=""  data-toggle="modal" data-target="#modalLoginForm"><span class="glyphicon glyphicon-log-in"></span>Login</a></li> 
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign"></span>About Us</a></li> 
                        <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li> 

                    <?php } ?> 
                </ul> 
            </div> 
        </div> 
    </div>

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div ><h3 class="modal-title w-100 font-weight-bold ">LOGIN</h3>
                       
                    </div>
                </div>
                <div class="modal-body mx-3">
                    <div class="form-group"><h5 >Don't Have a account? <a href="signup.php">Register </a></h5></div>
                    
                    <form method="POST" action="Login_submit.php">
                        <div class="form-group">
                            <input type="text"  class="form-control " id="email" name="email" placeholder="Enter Your Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control " name="password" id="pwd" placeholder="Enter Your Password" pattern=".{6,}" required>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Login"  name="Submit">
                        </div>
                        <div class="form-group">
                            <a href="forgot-password.php">Forgot password?</a>
                        </div>
                        
                    </form>


                </div>

            </div>
        </div>
    </div>

</body> 
</html>