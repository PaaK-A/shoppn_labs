<script src="../js/alertRedirect.js"></script>

<?php
include "../controllers/product_contrroller.php";

if(ISSET($_POST['productinfo'])){

    $get_productcat=$_POST['productcat'];
    $get_productbrand=$_POST['pdtbrand'];
    $get_producttitle=$_POST['productTitle'];
    $get_productprice=$_POST['productPrice'];
    $get_productdescription=$_POST['productDescription'];
    $get_productimage=$_POST['productImg'];
    $get_productkeywords=$_POST['productKeywords'];


     
    if( addProduct_ctr($get_productcat,$get_productbrand,$get_producttitle, $get_productprice,$get_productdescription,$get_productimage,$get_productkeywords) != NULL){
        echo '<script>alertRedirect_index("Product Added")</script>';
        //echo 'Record added.';
    }
    else{
        print("Record Not Added.");
    }
    
}


?>

<a></a>

