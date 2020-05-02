<?php

function check_if_added_to_cart($item_id) {
    $user_id = $_SESSION['user_id'];
    require 'common.php';

    $query = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    $num= mysqli_num_rows($res);
    if($num>=1){
        return 1;
    }
 else {
    return 0;    
    }
        
}
