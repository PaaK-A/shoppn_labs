<?php 
//to start session
include ("settings/core.php");
include("../functions/product_functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = 'stylesheet' href = 'css/basic_styling.css'>
   
    <title>Labs</title>

    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
</head>

<body> 
<h1> Basic Task Index </h1>

<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  if($_SESSION["role"] == 1){
    echo '<a class="index" href="login/logout.php">Logout</a>';
    echo " ";
    echo '<a class="index" href="admin/brand.php">Brand</a>';
    echo " ";
    echo '<a class="index" href="admin/category.php">Category</a>';
    echo " ";
    echo '<a class="index" href="view/addproduct_form.php">Add Product</a>';
    echo " ";
    echo '<a class="index" href="view/all_product.php">All Products</a>';
    echo " ";
    echo '<a class="index" href="view/product_search_result.php">PSearch</a>';
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo '
    <form method="POST" action="view/product_search_result.php">
    <input type="text" name="searchinput" id="search" placeholder="Search...">

    <input type="submit" name="searchbtn" value="Search">
    </form>
';
  }
  else{
    echo '<a class="index" href="view/addproduct_form.php">Add Product</a>';
    echo " ";
    echo '<a class="index" href="view/all_product.php">All Products</a>';
    echo " ";
    echo '<a class="index" href="login/logout.php">Logout</a>';
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo '
    <form method="POST" action="view/product_search_result.php">
    <input type="text" name="searchinput" id="search" placeholder="Search...">

    <input type="submit" name="searchbtn" value="Search">
    </form>
';
  }
}
else{
  echo '<a class="index" href="login/login.php">Login</a>';
  echo " ";
  echo '<a class="index" href="login/register.php">Register</a>';
}
?>

</body>