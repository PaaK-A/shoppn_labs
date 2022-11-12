<script src="https://kit.fontawesome.com/78711647c2.js" crossorigin="anonymous"></script>


<?php 
include("../settings/core.php");
include ("../controllers/product_contrroller.php");
include ("../controllers/cart_controller.php");

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

    if($_SESSION["role"] == 1){ 
        //echo "Hello admin";
        $role= "ADMIN";
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

$getcustomerID= $_SESSION['cid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cart Page">
    <meta name="keywords" content="Cart, html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/checkout_style.css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css" type="text/css">

    <link rel="stylesheet" href="../css/checkout_style.css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/checkout_style.css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/checkout_style.css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/checkout_style.css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/checkout_style.css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/checkout_style.css/style.css" type="text/css">

</head>

<body>
     <!-- Breadcrumb Section Begin -->
     <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="../index.php">Home</a>
                            <a href="../view/all_product.php">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                
                                $selallCart= selectAllCart_ctr();
                                $tprices_array= array(); 
                                
                                foreach ($selallCart as $row){
                                    if($getcustomerID===$row['c_id']){
                                        $product_id= $row['p_id'];
                                        $selfromProducts=selectAProduct_ctr($product_id);
                                        $item_total= ($selfromProducts['product_price'])*($row['qty']);
                                        array_push($tprices_array,$item_total);
                                        echo '<tr>
                                            <td class="product__cart__item">
                                                
                                                <div class="product__cart__item__text">
                                                    <h6>'.$selfromProducts['product_title'].'</h6>
                                                    <h5>GHC '.$selfromProducts['product_price'].'</h5>
                                                </div>
                                            </td>
                                            <td class="quantity__item">
                                                <div class="quantity">
                                                    <div class="pro-qty-2">
                                                    <span class="fa fa-angle-left dec qtybtn"></span>
                                                        <input type="text" value="'.$row['qty'].'" name="cart_quantity" id="cart_qty">
                                                        <span class="fa fa-angle-right inc qtybtn"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__price">GHC '.$item_total.'</td>
                                            <td class="cart__close">
                                            <a href="../actions/remove_from_cart.php?pid='.$selfromProducts['product_id'].'" onclick="return confirmdelete()">
                                            <i class="fa-solid fa-xmark"></i>
                                            </a>
                                            </td>
                                        </tr>';
                                    }
                                    else{
                                        // echo $row['c_id'];
                                        // echo "::";
                                        // echo $role;
                                        // echo "::";
                                        // var_dump($getcustomerID);
                                        // echo "-";
                                              
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="../view/all_product.php">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <!-- <li>Subtotal <span>$ 169.50</span></li> -->
                            <li>Total <span><?php  echo "GHS ". number_format(array_sum($tprices_array),2); ?></span></li>
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- JS PLUGINS -->
    <script src="../js/main.js"></script>

    <script>
        function confirmdelete(){
            if (confirm('Record will be deleted. Proceed?') == true ){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
</body>
</html>