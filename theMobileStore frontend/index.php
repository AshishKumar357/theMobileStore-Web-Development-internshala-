<?php
if (isset($_SESSION['email'])) {
    header("Location: home.php");
}
?> 
<!DOCTYPE html> 
    <head> 

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <title>The Mobile Store</title> 
    </head> 
    <body style="margin-top: 60px;"> 
    <?php include 'includes/header.php' ?>
    <?php include 'includes/Check-if-added.php' ?>



    <div class="container-fluid" style=" ">
        <div class="row ">
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        POCO X2
                    </div>
                    <div class="panel-body text-center">
                        <div><img src="images/poco-x2.png" alt="Poco X2" height="250"></div>
                        <div style="margin-top: 10px;">
                            <p>6 GB RAM | 64 GB ROM | 6.67 inch Full HD+ Display | 6 camera's (4+2) | 4500 mAh Lithium-ion Polymer Battery<br> Qualcomm Snapdragon 730G Processor</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                            <p>
                                <a href="" data-toggle="modal" data-target="#modalLoginForm" role="button" class="btn btn-primary btn-block">Order Now!</a>
                            </p> 
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        ASUS 6Z
                    </div>
                    <div class="panel-body text-center">
                        <div><img src="images/asus-6z.png" alt="ASUS 6Z" height="250"></div>
                        <div style="margin-top: 10px;">
                            <p>6 GB RAM | 64 GB ROM | 6.39 inch Full HD+ Display | Quad Camera | 5000 mAh Battery <br> Qualcomm SnapDragon 855 Processor</p>
                        </div>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                            <p>
                                <a href="" data-toggle="modal" data-target="#modalLoginForm" role="button" class="btn btn-primary btn-block">Order Now!</a>
                            </p> 
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        SAMSUNG GALAXY A70
                    </div>
                    <div class="panel-body text-center">
                        <div><img src="images/galaxy-a70.png" alt="SAMSUNG GALAXY A70" height="250"></div>
                        <div style="margin-top: 10px;">
                            <p>6 GB RAM | 128 GB ROM | 6.7  Full HD+ Display | Quad Camera(3+1) | 4500 mAh Lithium-ion Battery<br>Qualcomm Snapdragron 675 Processor</p>
                        </div>
                            <?php if (!isset($_SESSION['email'])) { ?> 
                                <p>
                                    <a href="" data-toggle="modal" data-target="#modalLoginForm" role="button" class="btn btn-primary btn-block">Order Now!</a>
                                </p> 
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading ">
                            Redmi Note 9 Pro
                        </div>
                        <div class="panel-body text-center">
                            <div><img src="images/redmi-note9.png" alt="Redmi Note 9 Pro" height="300"></div>
                            <div style="margin-top: 10px;">
                                <p>4 GB RAM | 64 GB ROM | 6.67 inch Full HD+ Display | Quad Camera + Front Camera | 5020 mAh Battery<br>Qualcomm Snapdragon 720G Processor</p>
                            </div>
                            
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                    <p>
                                        <a href="" data-toggle="modal" data-target="#modalLoginForm" role="button" class="btn btn-primary btn-block">Order Now!</a>
                                    </p> 
                                <?php } ?>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading ">
                            Realme X
                        </div>
                        <div class="panel-body text-center">
                            <div><img src="images/realme-x.png" alt="Realme X" height="300"></div>
                            <div style="margin-top: 10px;">
                                <p>4 GB RAM | 128 GB ROM | 6.53 inch Full HD+ Display | 48MP + 5MP | 16MP Front Camera | 3765 mAh Battery <br> Qualcomm Snapdragon 710 Octa Core</p>
                            </div>
                           
                            <?php if (!isset($_SESSION['email'])) { ?> 
                                <p>
                                    <a href="" data-toggle="modal" data-target="#modalLoginForm" role="button" class="btn btn-primary btn-block">Order Now!</a>
                                </p> 
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading ">
                            OPPO Reno3 Pro
                        </div>
                        <div class="panel-body text-center">
                            <div><img src="images/oppo-reno3.png" alt="OPPO Reno3 Pro" height="300"></div>
                            <div style="margin-top: 10px;">
                                <p>8 GB RAM | 128 GB ROM | 6.4 inch Display | Quad Camera + Dual Front Camera | 4025 mAh Battery<br>MediaTek Helio P95 Processor</p>
                            </div>
                                <?php if (!isset($_SESSION['email'])) { ?> 
                                    <p>
                                        <a href="" data-toggle="modal" data-target="#modalLoginForm" role="button" class="btn btn-primary btn-block">Order Now!</a>
                                    </p> 
                                <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
         
        
        
        
        <?php include 'includes/footer.php'; ?>
    </body> 
</html>