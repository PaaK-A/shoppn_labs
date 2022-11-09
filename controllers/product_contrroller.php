<?php
//connect to the user account class
include("../classes/product_class.php");

/*
PRODUCTS 
*/

//--INSERT product cls--//
function addProduct_ctr($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords){
    $addItem= new product_class();

    return $addItem->addProduct_cls($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords);
    
}

//--SELECT ALL PRODUCTS--//
function selectAllProducts_ctr(){
    $selectAll= new product_class();

    return $selectAll->selectAllProducts_cls();
    
}

//--SELECT A Product--//
function selectAProduct_ctr($productid){
    $selectAProduct= new product_class();

    return $selectAProduct->selectAProduct_cls($productid);
    
}

//--update product cls--//
function updateProduct_ctr($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords,$productID){
    $updateItem= new product_class();

    return $updateItem->updateProduct_cls($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords,$productID);
}

//--search product cls--//
function searchProduct_ctr($searchproduct_term){
    $searchItem= new product_class();

    return $searchItem->searchProduct_cls($searchproduct_term);
}

/*  
BRANDS
*/

//--INSERT brand cls--//
function addBrand_ctr($a){
    $addItem= new product_class();

    return $addItem->addBrand_cls($a);
}

//--update brand cls--//
function updateBrand_ctr($editedbrand,$brandID){
    $updateItem= new product_class();

    return $updateItem->updateBrand_cls($editedbrand,$brandID);
}

//--SELECT ALL--//
function selectAllBrands_ctr(){
    $selectAll= new product_class();

    return $selectAll->selectAllBrands_cls();
    
}

//--SELECT--//
function selectABrand_ctr($brandid){
    $selectAll= new product_class();

    return $selectAll->selectABrand_cls($brandid);
    
}

//category 

//--INSERT category cls--//
function addCategory_ctr($catname){
    $addItem= new product_class();

    return $addItem->addCategory_cls($catname);
}

//--SELECT ALL categories--//
function selectAllCategories_ctr(){
    $selectAll= new product_class();

    return $selectAll->selectAllCategories_cls();
    
}

//--SELECT A Category--//
function selectACategory_ctr($categoryid){
    $selectAll= new product_class();

    return $selectAll->selectACategory_cls($categoryid);
    
}

//--update catgeory cls--//
function updateCategory_ctr($editedcategory,$categoryID){
    $updateItem= new product_class();

    return $updateItem->updateCategory_cls($editedcategory,$categoryID);
}

?>