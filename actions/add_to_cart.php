<script src="../js/alertRedirect.js"></script>

<?php
include("../settings/core.php");
//include_once "../controllers/product_contrroller.php";
include ("../controllers/cart_controller.php");

// Check if the user is logged in, if not then redirect him to login page
//if logged in check if admin, if not redirect to login page 

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

    if($_SESSION["role"] == 1){ 
        //echo "Hello admin";
        $role= "ADMIN";
        //echo($_SESSION["cid"]);
    }

    else{ 
        //echo "You are not ADMIN.";
        $role= "User";
        //echo '<a href="l../login/login.php"">Login</a>';
    }
}

else{
    header("location: ../login/login.php");
}

/**get customer ID */
$getcustomerID= $_SESSION['cid'];

/**get product ID */
$getproductID= $_GET['pid'];

/**get quantity */
$getqty= $_GET['qty'];

/**get IP address */
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ipaddress = $_SERVER['REMOTE_ADDR'];
}

/**get product quantity */
//$getqty= $_POST

// echo $getcustomerID;
// echo " PID:";
// echo $getproductID; 
// echo " IP";
// echo ($ipaddress);
// echo " QTY";
// var_dump( $getqty);

// $QTY=3;
// $IP=4;
if ($getqty == NULL){
    $getqty=1;
    //echo $getqty;
    if(addCart_ctr($getproductID,$ipaddress,$getcustomerID,$getqty) != NULL){
        echo '<script>alertRedirect_view("Product Added","all_product.php")</script>';
        //echo "yh";
    }
    else{
        echo '<script>alertRedirect_view("Not Added To Cart","single_product.php?pid='.$getproductID.'")</script>';
        //echo "nah";
    }
}
else{
    if(addCart_ctr($getproductID,$ipaddress,$getcustomerID,$getqty) != NULL){
        echo '<script>alertRedirect_view("Product Added","all_product.php")</script>';
        //echo "yh";
    }
    else{
        echo '<script>alertRedirect_view("Not Added To Cart","single_product.php?pid='.$getproductID.'")</script>';
        //echo "nah";
    }
}

 

//echo $_SESSION['loggedin'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
 
</body>
</html>