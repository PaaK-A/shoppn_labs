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
    $imgtmp_name= $_FILES['productImg']['tmp_name'];
    $imgfile_name= $_FILES['productImg']['name'];
    $folder= "../images/".$imgfile_name;
    
    //echo $file;

    if(move_uploaded_file($imgtmp_name, $folder)){
        //echo "Image moved.";
        //echo $folder;
        if( addProduct_ctr($get_productcat,$get_productbrand,$get_producttitle, $get_productprice,$get_productdescription,$folder,$get_productkeywords) != NULL){
            echo '<script>alertRedirect_index("Product Added")</script>';
            echo 'Record added.';
        }
        else{
            print("Record Not Added.");
        }
    }
    else{
        echo "Image not moved.";
    }
    
    
    
}


?>

<a></a>

