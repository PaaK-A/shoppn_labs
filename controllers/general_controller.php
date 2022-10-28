<?php
//connect to the user account class
include("../classes/general_class.php");

//sanitize data




//--INSERT--//
function addContact_ctr($a,$b){
    $addItem= new general_class();

    return $addItem->addContact_cls($a,$b);
    
}
//--SELECT--//
function selectAllContact_ctr(){
    $selectAItem= new general_class();

    return $selectAItem->selectAll_cls();
    
}
//--UPDATE--//

//--DELETE--//

?>