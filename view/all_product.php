<?php
    // Initialize the session
    //session_start();
    include("../settings/core.php");
    include("../controllers/product_contrroller.php");
    

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Paa Kwesi Addae">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Products</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">


    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>


<body>
    <div class="container"><h1>PRODUCTS <small><?php echo $role ?></small></h1></div>

    <!-- html -->
    <div class="album py-5 bg-light">
        <div class="container">
            
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php
                    $selallProducts= selectAllProducts_ctr();

                    foreach ($selallProducts as $row) {
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_price=$row['product_price'];
                        $product_image=$row['product_image'];
                        

                        ///echo $product_title;
                        echo '
                    
                            <div class="col">
                                <div class="card shadow-sm">
                                    
                                    <div class="bd-placeholder-img card-img-top" >
                                    <img src='.$product_image.' width="100%" height="225" >
                                    </div>

                                    <div class="card-body">
                                    <p class="card-text">'.$product_title.'</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                <a href="single_product.php?id='.$product_id.'" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                                </div>
                                            <small class="card-text">GHS'.$product_price.'</small>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <!-- ends here -->
                                
                        ';
                        
                    }
                ?>

            </div>
        </div>
    </div>
        
</body>
</html>