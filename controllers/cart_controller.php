<?php
//connect to the user account class
include("../classes/cart_class.php");

/*
PRODUCTS 
*/

//--INSERT product cls--//
function addCart_ctr($productid,$ipaddress,$customerid,$qty){
    $addItem= new cart_class();

    return $addItem->addtoCart_cls($productid,$ipaddress,$customerid,$qty);
    
}

//--SELECT ALL PRODUCTS--//
function selectAllCart_ctr(){
    $selectAll= new cart_class();

    return $selectAll->selectAllCart_cls();
    
}

//--SELECT A Product--//
function selectACart_ctr($productid){
    $selectAProduct= new cart_class();

    return $selectAProduct->selectACart_cls($productid);
    
}

//--update product cls--//
function updateCart_ctr($productid,$ipaddress,$customerid,$qty){
    $updateItem= new cart_class();

    return $updateItem->updateCart_cls($productid,$ipaddress,$customerid,$qty);
}

/**DELETE CART */
function deleteCart_ctr($cartproductid){
    $deleteItem= new cart_class();

    return $deleteItem->deleteCart_cls($cartproductid);
}

/**COUNT CART PRODUCTS */
function countCart_ctr($customerID){
    $countItem= new cart_class();

    return $countItem-> countCart_cls($customerID);
}
//--search product cls--//
// function searchCart_ctr($search_term){
//     $searchItem= new cart_class();

//     return $searchItem->searchCart_cls($searchproduct_term);
// }

?>