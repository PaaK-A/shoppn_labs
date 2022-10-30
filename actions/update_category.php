<script src="../js/alertRedirect.js"></script>

<?php
include("../settings/core.php");
include "../controllers/product_contrroller.php";

$getcategoryID= $_SESSION['id'];


//collecting form data
if(ISSET($_POST['editcategoryinfo'])){
    //get user input
    $get_editedcategory= $_POST['editedcategory'];

    //update in db
    if (updateCategory_ctr($get_editedcategory,$getcategoryID) != NULL){
        //print("Record Updated.");
        echo 
        '<script type="text/javascript">
        alertRedirect_admin("Record Updated.","category.php");
        </script>';
    }
    else{
        print("Record Not Updated.");
    };
    
}

?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
     <!--back to index button-->
     <button type="button" onclick="location.href='../admin/category.php'">Return to category</button>
</body>
</html>