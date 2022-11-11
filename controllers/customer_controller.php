<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data




//--INSERT--//
function addCustomer_ctr($a,$b,$c,$d,$e,$f,$g){
    $addItem= new customer_class();

    return $addItem->addCustomer_cls($a,$b,$c,$d,$e,$f,$g);
    
}


//--SELECT ONE email--//
function selectOneCustomer_ctr($customerinfo,$email){
    $selectOneItem= new customer_class();

   $selectOneItem->selectOne_cls($customerinfo,$email);

   return $selectOneItem;
    
}

//--SELECT A Product--//
function selectACustomer_ctr($customerid){
    $selectAProduct= new customer_class();

    return $selectAProduct->selectACustomer_cls($customerid);
    
}

//--SELECT ONE--//
function selectOneEmail_ctr($email){
    $selectOneEmail= new customer_class();

   $record = $selectOneEmail->selectOneEmail_cls($email);

   return $record;
   //print_r($selectOneEmail);
    
}

//--SELECT ONE--//
function selectOnePass_ctr($email){
    $selectOnePass= new customer_class();

   $passrecord = $selectOnePass->selectOnePass_cls($email);

   return $passrecord;
   //print_r($passrecord);
    
}

//--SELECT and COUNT ONE--//
function selectCountEmail_ctr($email){
    $selectOneEmail= new customer_class();

   $selectOneEmail->selectCount_cls($email);

   return $selectOneEmail;
    
}

//--SELECT ONE--//
function fetchOneCustomer_ctr($sqliquery){
    $fetchOneItem= new customer_class();

   $fetchOneItem->fetchOne_cls($sqliquery);

   return $fetchOneItem;
    
}

//--SELECT one mysli/COUNT--//
function count_ctr($email,$passwd){
    $countItem= new customer_class();

    return $countItem->count_cls($email,$passwd);
    
}

//--SELECT All--//
function selectAllCustomer_ctr(){
    $selectAItem= new customer_class();

    return $selectAItem->selectAll_cls();
    
}
//--UPDATE--//

//--DELETE--//

?>