<?php require 'includes/common.php'; ?>
<?php
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
        <title>Settings | The Mobile Store</title> 
	</head> 
	<body style="margin-top: 50px;"> 
            <?php include 'includes/header.php'?>
            
            
            <div class="container">
                <div class="row" style=" margin-top: 75px ; margin-bottom: 200px;">
                    <div class="col-xs-offset-3 col-xs-6">
                        <form action="Settings_script.php" method="POST">
                            <div class="form-group">
                            <h3>Change Password</h3>
                            </div>
                            <div class="form-group">
                                <input type="password"  class="form-control " name="oldpass" id="oldpass" placeholder="Old Password" required pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                    <input type="password"  class="form-control " name="newpass" id="newpass" placeholder="New Password" required pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                    <input type="password"  class="form-control " name="cnfpass" id="cnfpass" placeholder="Confirm Password" required pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Change password">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		
		<?php require 'includes/footer.php';?>
	</body> 
</html>
