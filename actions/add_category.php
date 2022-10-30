<script src="../js/alertRedirect.js"></script>

<?php
include "../controllers/product_contrroller.php";
    
//collecting form data
if(ISSET($_POST['categoryinfo'])){
    
    $get_category= $_POST['productcategory'];

    if( addCategory_ctr($get_category) != NULL){
        echo '<script>alertRedirect_admin("Record Added","category.php")</script>';
    }
    else{
        print("Record Not Added.");
    }

    exit();
}
?>
