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
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel = 'stylesheet' href = '../css/basic_tablestyling.css'>
</head>

<body>
    <h1>PRODUCT FORM <small><?php echo $role ?></small></h1>

    <form action= "../actions/add_product.php" method="POST">
        
        <!-- dropdown menu of categories -->
        <h4><label for="productcat">Choose a category:</label></h4>


        <!-- value is categoryid -->
        <select name="productcat" id="productcategory">
        <option selected="selected">--</option>
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
        
        
        
        <!-- dropdown menu of brand -->
        <h4><label for="pdtbrand">Choose a brand:</label></h4>

        <!-- value is brandid -->
        <select name="pdtbrand" id="productbrand">
        <option selected="selected">--</option>

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
        <input type="text" name="productTitle" placeholder="Enter Title" id="producttitle" required> 

        <!--make Price text box--> 
        <h4>Price</h4>
        <input type="text" name="productPrice" placeholder="Enter Price" id="productprice" required>  

        <!--make description text box--> 
        <h4>Description</h4>
        <textarea name="productDescription" placeholder="Enter Description" id="productdescription"></textarea>
        
       <!--make image text box--> 
       <h4>Product Image</h4>
       <label for="img">Select image:</label>
        <input type="file" id="img" name="productImg" accept="image/*">

        <!--make keywords text box--> 
        <h4>Keywords</h4>
        <textarea name="productKeywords" placeholder="Enter Keywords" id="keywords"></textarea>
        <br>
        <br>
        <!--submit button-->
        <input type="submit" name="productinfo" value="Add">
    </form>
    
    <br>

   
    <!--back to index button-->
    <button type="button" onclick="location.href='../index.php'">Return to Index</button>
    
    <br>
    <br>

    <table class="table" style="width:50%">
    <caption>Products Table</caption>
            <thead>
                <th>Title</th>
                <th>Price</th>
                <th>Description</th>
                <th>Product Image</th>
                <th colspan="2">Action</th>
            </thead>

            <tbody>
            <?php
                $selectall= selectAllProducts_ctr();
                
                foreach ($selectall as $row) 
                :
            ?>
                
                <tr>
                    <td><?php echo $row['product_title']; ?></td>

                    <td><?php echo $row['product_price']; ?></td>

                    <td><?php echo $row['product_desc']; ?></td>

                    <td><?php echo $row['product_image']; ?></td>

                    <td>
                        <a href="editproduct_form.php?id=<?php echo $row['product_id']; ?>" class="edit">Edit</a>

                    </td>
    
                </tr>
            <?php endforeach;?>
            
        </tbody>
</body>