<?php
include "../controllers/product_contrroller.php";
    
//collecting form data
if(ISSET($_POST['categoryinfo'])){
    
    $get_category= $_POST['productcategory'];

    addCategory_ctr($get_category);

    //echo "$get_brand";
    
    header("Location: ../admin/category.php");
    exit();
}
?>
