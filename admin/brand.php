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

?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
</head>

<body>
    <form action= "../actions/add_brand.php" method="POST">

        <!--make Brand text box--> 
        <h4>Brand</h4>
        <input type="text" name="productbrand" placeholder="Enter brand" id="productbrand" required> 
       
        <br>
        <br>
        <!--submit button-->
        <input type="submit" name="brandinfo" value="Add">

        <!-- to edit brand page button-->
        <button type="button" onclick="location.href='editbrand.php'">Edit Brand</button>
    </form>
    
    <br>
    
    <!--back to index button-->
    <button type="button" onclick="location.href='../index.php'">Return to Index</button>


    <br>
    <br>

    <table class="table">
            <thead>
                <th>Brand</th>
                <th colspan="2">Action</th>
            </thead>

            <tbody>
            <?php
                $selectall= selectAllBrands_ctr();
                
                foreach ($selectall as $row) 
                :
            ?>
                
                <tr>
                    <td><?php echo $row['brand_name']; ?></td>

                    <td>
                        <a href="editbrand.php?id=<?php echo $row['brand_id']; ?>" class="edit">Edit</a>

                    </td>
    
                </tr>
            <?php endforeach;?>
            
        </tbody>
    </table>

    
</body>