<script src="../js/alertRedirect.js"></script>

<?php
include "../controllers/product_contrroller.php";
    
//collecting form data
if(ISSET($_POST['brandinfo'])){
    
    $get_brand= $_POST['productbrand'];

    if(addBrand_ctr($get_brand) != NULL){
        echo '<script>alertRedirect_admin("Record Added","brand.php")</script>';
    }
    else{
        print("Brand Not Added.");
    }

}
?>
