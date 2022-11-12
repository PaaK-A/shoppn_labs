<script src="../js/alertRedirect.js"></script>

<?php 
include("../controllers/cart_controller.php");

    $productID=$_GET['pid'];

    if($productID){
        if(deleteCart_ctr($productID) != NULL){
            //echo "deleted";
            echo '<script>alertRedirect_view("Product Deleted","cart.php")</script>';
        }
        else{
            echo "Not deleted";
        }
    }
?>

