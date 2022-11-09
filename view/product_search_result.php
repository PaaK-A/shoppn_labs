<?php 
 include("../settings/core.php");include "../controllers/product_contrroller.php";
 include("../functions/product_functions.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/allpr_basicstyling.css" type="stylesheet">
</head>
<body>
 <!-- html -->
 <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                if(ISSET($_POST['searchbtn'])){
                    $get_searchterm=$_POST['searchinput'];
                    //echo $get_searchterm;
                    $search_results=searchProduct_ctr($get_searchterm);

                    foreach($search_results as $row){
                        //echo $row['product_title'];
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_price=$row['product_price'];
                        $product_image=$row['product_image'];
                        
                        // echo "<a href='single_product.php?id=".$row['product_id']."class='edit'>".$row['product_title']."</a>";

                        // echo "<br>";

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

                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>