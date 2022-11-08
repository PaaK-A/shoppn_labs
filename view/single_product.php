<?php
    // Initialize the session
    //session_start();
    include("../settings/core.php");
    include("../controllers/product_contrroller.php");
    include("nav_footer.php");

    // Check if the user is logged in, if not then redirect him to login page
    //if logged in check if admin, if not redirect to login page 

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        if($_SESSION["role"] == 1){ 
            //echo "Hello admin";
            $role="Admin";
        
        }

        else{ 
            //echo "You are not ADMIN.";
            $role="User";
            //echo '<a href="l../login/login.php"">Login</a>';
        }
    }

    else{
        header("location: ../login/login.php");
    }

    $_SESSION['id']= $_GET['id'];
    $getproductID= $_SESSION['id'];
    $selectoneP=selectAProduct_ctr($getproductID);
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
 </head>

 <body>
    
 <!-- Product section-->
 <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src=
                    <?php 
                    echo $selectoneP['product_image'];
                    ?>
                    alt="Product Image." /></div>
                    <div class="col-md-6">
                        <!-- <div class="small mb-1">SKU: BST-498</div> -->
                        <h1 class="display-5 fw-bolder">
                        <?php 
                        echo $selectoneP['product_title'];
                        ?>
                        </h1>
                        <div class="fs-5 mb-5">
                        <?php 
                        echo "GHS ".$selectoneP['product_price'];
                        ?>
                        </div>
                        <p class="lead"><?php 
                        echo $selectoneP['product_desc'];
                        ?></p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 </body>

 </html>