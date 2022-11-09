<?php 
include_once("../controllers/product_contrroller.php");

function get_allCategories_fxn(){
    echo "<option selected='selected'>--</option>";

    $selectallcat= selectAllCategories_ctr();
    
    foreach ($selectallcat as $row) {
        $category_id=$row['cat_id'];
        $category_name=$row['cat_name'];
        echo "<option value=".$category_id.">".$category_name."</option>";
    }

}

function get_allBrands_fxn(){
    echo "<option selected='selected'>--</option>";
    
    $selectallbrand= selectAllBrands_ctr();
    
    foreach ($selectallbrand as $row) {
        $brand_id=$row['brand_id'];
        $brand_name=$row['brand_name'];
        echo "<option value=".$brand_id.">".$brand_name."</option>";
    }
}

function searchbox_fxn(){

    echo '
        <form method="POST" action="../view/product_search_result.php">
        <input type="text" name="searchinput" id="search" placeholder="Search...">

        <input type="submit" name="searchbtn" value="Search">
        </form>
    ';
}
?>

