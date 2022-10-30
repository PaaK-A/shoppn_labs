<script src="../js/alertRedirect.js"></script>

<?php
include("../settings/core.php");
include "../controllers/product_contrroller.php";

$getbrandID= $_SESSION['id'];


//collecting form data
if(ISSET($_POST['editbrandinfo'])){
    //get user input
    $get_editedbrand= $_POST['editedbrand'];
    //echo $getbrandID;
    //echo $get_editedbrand;
    //echo "yes";

    //update in db
    if (updateBrand_ctr($get_editedbrand,$getbrandID) != NULL){
        //print("Record Updated.");
        echo 
        '<script type="text/javascript">
        alertRedirect_admin("Brand Updated.","brand.php");
        </script>';
    }
    else{
        print("Record Not Updated.");
    };
    //echo("Here");
    //echo $get_fname;
    //echo $get_tele; 
    //print_r($this);

    // header("Location: login.php");
    // exit();
    
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
     <button type="button" onclick="location.href='../admin/brand.php'">Return to Brand</button>
</body>
</html>
