<?php
    // Initialize the session
    //session_start();
    include("../settings/core.php");
    include("../controllers/product_contrroller.php");

    // Check if the user is logged in, if not then redirect him to login page
    //if logged in check if admin, if not redirect to login page 

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        if($_SESSION["role"] == 1){ echo "Hello admin";}

        else{ 
            echo "You are not ADMIN.";
            echo '<a href="l../login/login.php"">Login</a>';
        }
    }

    else{
        header("location: ../login/login.php");
    }

    $_SESSION['id']= $_GET['id'];
    $getbrandID= $_SESSION['id'];



?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action= "../actions/update_brand.php" method="POST">

        
        <!--make Brand text box--> 
        <h4>Brand</h4>
        <input type="text" name="editedbrand"  id="productbrand" 
        value=
        <?php
            $selectone=selectABrand_ctr($getbrandID); 
            if ($selectone == NULL){
            print ("Doesnt exist.");
            }
            else{
                print $selectone['brand_name'];
            }
        ?>
        required> 
       
        <br>
        <br>
        <!--submit button-->
        <input type="submit" name="editbrandinfo" 
        value="Edit">

    </form>
    
    <br>
    
    <!--back to index button-->
    <button type="button" onclick="location.href='../index.php'">Return to Index</button>
</body>

<br>

