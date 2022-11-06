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

    $_SESSION['id']= $_GET['id'];
    $getproductID= $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>

<body>

<h1>EDIT PRODUCT <small><?php echo $role ?></small></h1>

<form action= "../actions/edit_product.php" method="POST">
        
        <!-- dropdown menu of CATEGORIES -->
        <h4><label for="editedpcat">Choose a category:</label></h4>


        <!-- value is categoryid -->
        <select name="editedpcat" id="editedproductcategory">
      
        <?php
            $selectoneP=selectAProduct_ctr($getproductID);
            $selectone=selectACategory_ctr($selectoneP['product_cat']); 
            if ($selectone == NULL){
            print ("Doesnt exist.");
            }
            else{
                echo '<option selected="selected" value='.$selectone['cat_id'].'>'
                .$selectone['cat_name']
                .'</option>';
            }
        ?>
        

        <?php
            $selectallcat= selectAllCategories_ctr();
            
            foreach ($selectallcat as $row) 
            :
        ?>
        <option value= <?php echo $row['cat_id'];?> >
        <?php echo $row['cat_name'];?>
        </option>
        <?php endforeach;?>
        </select>
        
        
        
        <!-- dropdown menu of BRAND -->
        <h4><label for="editedpdtbrand">Choose a brand:</label></h4>

        <!-- value is brandid -->
        <select name="editedpdtbrand" id="editedproductbrand">
      
        <?php
            $selectoneP=selectAProduct_ctr($getproductID);
            $selectone=selectABrand_ctr($selectoneP['product_brand']); 
            if ($selectone == NULL){
            print ("Doesnt exist.");
            }
            else{
                print $selectone['brand_name'];
                echo '<option selected="selected" value='.$selectone['brand_id'].'>'
                .$selectone['brand_name']
                .'</option>';
            }
        ?>


        <?php
            $selectallbrand= selectAllBrands_ctr();
            
            foreach ($selectallbrand as $row) 
            :
        ?>
        <option value= <?php echo $row['brand_id']?> >
        <?php echo $row['brand_name']?>
        <?php endforeach;?>
        </option>
        </select>

        <!-- create title form. -->
        <h4>Title</h4>
        <input type="text" name="editedpdtTitle" id="editedproducttitle" 
        value=
        <?php
            $selectone=selectAProduct_ctr($getproductID); 
            if ($selectone == NULL){
            print ("Doesnt exist.");
            }
            else{
                print $selectone['product_title'];
            }
        ?>
        required> 

        <!--make Price text box--> 
        <h4>Price</h4>
        <input type="text" name="editedpdtPrice" id="editedproductprice" 
        value=
        <?php
            $selectone=selectAProduct_ctr($getproductID); 
            if ($selectone == NULL){
            print ("Doesnt exist.");
            }
            else{
                print $selectone['product_price'];
            }
        ?>
        required>  

        <!--make description text box--> 
        <h4>Description</h4>
        <?php
            $selectone=selectAProduct_ctr($getproductID); 
            if ($selectone == NULL){
                print ("Doesnt exist.");
            }
            else{
                echo '<textarea name="editedpdtDescription" id="editedproductdescription">'.$selectone['product_desc'].'</textarea>';
                //print $selectone['product_desc'];
            }
        ?>
        

       <!--make image text box--> 
       <h4>Product Image</h4>
       <label for="img">Select image:</label>
        <input type="file" id="editedimg" name="editedpdtImg" accept="image/*">

        <!--make keywords text box--> 
        <h4>Keywords</h4>
    
        <?php
            $selectone=selectAProduct_ctr($getproductID); 
            if ($selectone == NULL){
                print ("Doesnt exist.");
            }
            else{
                echo '<textarea name="editedpdtKeywords" id="editedkeywords">'.$selectone['product_keywords'].'</textarea>';
            }
        ?>
        <br>
        <br>
        <!--submit button-->
        <input type="submit" name="editproductinfo" value="Edit">
    </form>

    <br>
    
    <!--back to index button-->
    <button type="button" onclick="location.href='../index.php'">Return to Index</button>
</body>
</html>