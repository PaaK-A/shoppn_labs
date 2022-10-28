<?php
include "../controllers/product_contrroller.php";
    
//collecting form data
if(ISSET($_POST['brandinfo'])){
    
    $get_brand= $_POST['productbrand'];

    addBrand_ctr($get_brand);

    //echo "$get_brand";
    
    header("Location: ../admin/brand.php");
    exit();
}
?>
