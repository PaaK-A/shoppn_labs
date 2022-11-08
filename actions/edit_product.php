<script src="../js/alertRedirect.js"></script>

<?php
include("../settings/core.php");
include "../controllers/product_contrroller.php";

$getproductID= $_SESSION['id'];


//collecting form data
if(ISSET($_POST['editproductinfo'])){
    //get user input
    $get_editedpdtcategory= $_POST['editedpcat'];
    $get_editedpdtbrand= $_POST['editedpdtbrand'];
    $get_editedpdttitle= $_POST['editedpdtTitle'];
    $get_editedpdtprice= $_POST['editedpdtPrice'];
    $get_editedpdtdescription= $_POST['editedpdtDescription'];
    $get_editedpdtimage= $_POST['editedpdtImg'];
    $get_editedpdtkeywords= $_POST['editedpdtKeywords'];
    $imgtmp_name= $_FILES['editedpdtImg']['tmp_name'];
    $imgfile_name= $_FILES['editedpdtImg']['name'];
    $folder= "../images/".$imgfile_name;

    if(move_uploaded_file($imgtmp_name, $folder)){
        //update in db
        if (updateProduct_ctr($get_editedpdtcategory,$get_editedpdtbrand,$get_editedpdttitle,$get_editedpdtprice,$get_editedpdtdescription,$folder,$get_editedpdtkeywords,$getproductID) != NULL){
            //print("Record Updated.");
            echo 
            '<script type="text/javascript">
            alertRedirect_view("Product Updated.","addproduct_form.php");
            </script>';
        }
        else{
            print("Record Not Updated.");
        }
    }
    else{
        echo "Image not found.";
    }
}

?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
     <!--back to index button-->
     <button type="button" onclick="location.href='../view/addproduct_form.php'">Return to Product</button>
</body>
</html>
