<?php
//connect to the user account class
include("../classes/product_class.php");


//--INSERT product cls--//
function addProduct_ctr($a,$b,$c,$d,$e,$f,$g){
    $addItem= new product_class();

    return $addItem->addProduct_cls($a,$b,$c,$d,$e,$f,$g);
    
}

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