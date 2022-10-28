<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author Paa Kwesi Addae
 *
 */

class customer_class extends db_connection
{

	//--INSERT customer--//
	public function addCustomer_cls($cusName,$cusEmail,$cusPass,$cusCountry,$cusCity,$cusContact,$cusImage){
		//write query
		$usrRole='2';
		$insertsql = "INSERT INTO customer(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_image,user_role) VALUES ('$cusName','$cusEmail','$cusPass','$cusCountry','$cusCity','$cusContact','$cusImage',$usrRole)";
        
		//execute 	
		return $this -> db_query($insertsql);
	}

   //--INSERT admin--//
	public function addAdmin_cls($cusName,$cusNum,$cusEmail,$cusPass,$cusCountry,$cusCity,$cusContact,$cusImage,$usrRole){
		//write query
		$usrRole='1';
		$insertsql = "INSERT INTO customer(customer_name,customer_email,customer_pass,customer_country,,customer_city,customer_contact,customer_image,user_role) VALUES ('$cusName','$cusNum','$cusEmail','$cusPass','$cusCountry','$cusCity','$cusContact','$cusImage',$usrRole)";

		//execute 	
		return $this -> db_query($insertsql);
	} 

    //--SELECT All--//
	public function selectAll_cls(){
		//write query
		
		$selallsql = "SELECT * FROM customer";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}
	
	//--SELECT one email--//
	public function selectOneEmail_cls($email){
		//write query
		
		$selectonesql="SELECT * FROM customer WHERE customer_email='$email'";

		//execute 	
		return $this -> db_fetch_one($selectonesql);
		
		//print_r($this -> db_fetch_one($selectonesql));
	}

	//--SELECT one passwd--//
	public function selectOnePass_cls($email){
		//write query
		
		$selectonesql="SELECT customer_pass FROM customer WHERE customer_email='$email' ";

		//execute 	
		return $this -> db_fetch_one($selectonesql);
	}

	//--SELECT and COUNT one email--//
	public function selectCount_cls($email){
		//write query
		
		$selectonesql="SELECT * FROM customer WHERE customer_email='$email'";

		//execute 	
		return $this -> db_count_one($selectonesql);
	}


	public function selectOne_cls($customerinfo,$email){
		//write query
		
		$selectonesql="SELECT $customerinfo FROM customer WHERE customer_email='$email' ";

		//execute 	
		return $this -> db_query($selectonesql);
	}

	public function fetchOne_cls($sqliquery){

		//execute 	
		return $this -> db_query($sqliquery);
	}

	//--SELECT one mysli/COUNT--//
	public function count_cls($email,$passwd){
		//write query
		
		$selectemailsql="SELECT * FROM customer WHERE customer_email='$email' ";
		$selectpasswordsql="SELECT * FROM customer WHERE customer_pass='$passwd'";

		//execute 	
		return $this -> db_count($selectemailsql);	
	}

	/* 
	//--UPDATE--//
	public function editContact_cls($phoneID,$newName,$newNum){
		//write query
		$updatesql = "UPDATE phonebook SET pname='$newName', pphoned='$newNum' WHERE pid='$phoneID' " ;

		//execute 
		return $this -> db_query($updatesql);
	} */


	//--DELETE--//
	public function deleteCustomer_cls($customerID){
		//write query
		$sql = "DELETE FROM customer WEHRE customer_id='customerID' ";

		//execute 
		return $this -> db_query($sql);
	}

}

?>