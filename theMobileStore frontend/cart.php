 <?php
    require 'includes/common.php';
    if (!isset($_SESSION['email'])) {
        header("Location: index.php");
    }
    $user_id =$_SESSION['user_id'];
    $query_select_products_in_cart = "SELECT * FROM user_items LEFT JOIN item ON user_items.item_id = item.pid WHERE user_items.user_id = '$user_id' AND user_items.status = 'Added to cart';";
    $rescart = mysqli_query($con, $query_select_products_in_cart) or die(mysqli_error($con));
    $sum=0;
    $i=0;
    $id="";
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
    <title>MY CART | The Mobile Store</title> 
</head> 
<body style="margin-top: 50px; text-align: center"> 
    <?php include 'includes/header.php' ?>

   
    <div class="container" style=" margin-top: 75px; margin-bottom: 375px;">
        <div class= "row">
            <div class= "col-xs-offset-2 col-xs-8">
                <table class="table table-striped table-hover table-responsive">
                    <tbody>
                        <tr><th style="text-align: center">No.</th><th style="text-align: center">Item Number</th> <th style="text-align: center">Item Name</th> <th style="text-align: center">Price</th> <th> </th></tr>
                        <?php
                        if (!mysqli_num_rows($rescart)) { ?>
                        <tr> <td colspan="4"> <?php echo "Add items to the cart first!";?></td></tr>
                        <?Php } else { 
                            
                            while ($row = mysqli_fetch_array($rescart)) { 
                                $sum= $sum+$row['price']; 
                                if($i==0){
                                    $id= $id.$row['item_id'];
                                }else {
                                $id= $id.",".$row['item_id']; }?>
                                <tr> 
                                    
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $row['item_id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td><?php echo " <a href='cart-remove.php?id={$row['id']}' class='remove_item_link'>  Remove</a>" ?> </td>
                                </tr>
                                
                         <?php } 
                        }
                        ?>
                                <tr><td></td> 
                                    <td></td>
                                    <td>Total</td>
                                    <td>Rs. <?php echo"$sum" ?>/-</td>
                                    <td>
                                        <?php if($id==""){
                                            echo "<a href= 'success.php?id={$id}' class='btn btn-primary disabled'>Confirm Order</a>";
                                        } else { 
                                        echo "<a href= 'success.php?id={$id}' class='btn btn-primary'>Confirm Order</a>"; 
                                        }
                                        ?>
                                    </td>
                                </tr>
                </tbody>
                    </table>
                </div>	
            </div>		
        </div>



        <?php require 'includes/footer.php'; ?>
</body> 
</html>