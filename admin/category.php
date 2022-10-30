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
    <form action= "../actions/add_category.php" method="POST">

        <!--make Category text box--> 
        <h4>Category</h4>
        <input type="text" name="productcategory" placeholder="Enter category" id="productcategory" required> 
       
        <br>
        <br>
        <!--submit button-->
        <input type="submit" name="categoryinfo" value="Add">

    </form>
    
    <br>
    
    <!--back to index button-->
    <button type="button" onclick="location.href='../index.php'">Return to Index</button>


    <br>
    <br>

    <table class="table">
            <thead>
                <th>Category</th>
                <th colspan="2">Action</th>
            </thead>

            <tbody>
            <?php
                $selectall= selectAllCategories_ctr();
                
                foreach ($selectall as $row) 
                :
            ?>
                
                <tr>
                    <td><?php echo $row['cat_name']; ?></td>

                    <td>
                        <a href="editcategory.php?id=<?php echo $row['cat_id']; ?>" class="edit">Edit</a>

                    </td>
    
                </tr>
            <?php endforeach;?>
            
        </tbody>
    </table>
    
</body>