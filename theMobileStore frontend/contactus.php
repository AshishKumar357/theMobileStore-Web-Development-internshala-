

<!DOCTYPE html> 
<head> 

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <title>Contact Us | The Mobile Store</title> 
</head> 
<body style="margin-top: 75px;"> 
    <?php include 'includes/header.php' ?>

    <div class="container" align="justify">
        <div class="row">
            <div class="col-sm-9 col-md-9">
                <h2>LIVE SUPPORT</h2>
                <p><h4>24 Hours | 7 days a week | 365 days a year Live Technical Support</h4></p>
                <p> Since establishment we have tried not to give customers any chance of any complaint. We have tried to be 
                    impartial to the customers. And have tried to keep up the quality and effort we put in out products and services. Yet 
                    if there is  any inconvenience anywhere. We provide our customers with 100% personal customer care support. <br>Feel free to contact us.</p>
            </div>
            <div class="col-sm-3 col-md-3">
                <img src="images/Contact-page.png" alt="contact us image" style="float: right; height: 250px; width: 300px; margin-right: 50px">
            </div>
        </div>

        <div class="row">
            <div class="col col-sm-8">
                <h2> CONTACT US: </h2>
                <form method="POST" action="contact_script.php">
                    <div class="form-group">
                        <b>Name:</b>
                        <input type="text" class="form-control " name="namecontact" id="namecontact" required>
                    </div>
                    <div class="form-group">
                        <b>Email:</b>
                        <input type="text"  class="form-control " id="emailcontact" name="emailcontact" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group">
                        <b>Message:</b>
                        <textarea name="messagecontact" class="form-control" id="messagecontact" required></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                  
                </form>
            </div>
            <div class="col col-sm-4">
                <h2> Company Information: </h2>
                <p> 1099, Murgesh pallya</p>
                <p> Banglore, Karnataka</p>
                <p> India -560071</p>
                <p>Phone(+91): 1800 100 5467</p>
                <p>Fax: 123456789</p>
                <p>Email: contactus@mobilestore.com</p>
            </div>
        </div>
    </div>


    <?php require 'includes/footer.php'; ?>
</body> 
</html>
