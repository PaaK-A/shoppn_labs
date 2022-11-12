<script src="../js/alertRedirect.js"></script>

<?php 
include("../settings/core.php");
include("../controllers/cart_controller.php");

    $productID=$_GET['pid'];
    $customerID=$_SESSION['cid'];

    // echo $productID;
    // echo "SPACE";
    // echo $customerID;
    if($productID){
        if(deleteCart_ctr($productID,$customerID) != NULL){
            //echo "deleted";
            echo '<script>alertRedirect_view("Product Deleted","cart.php")</script>';
        }
        else{
            echo "Not deleted";
        }
    }
?>

