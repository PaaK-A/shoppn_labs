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

class general_class extends db_connection
{

	//--INSERT contact--//
	public function addContact_cls($telename,$telenum){
		//write query
		
		$insertsql = "INSERT INTO phonebook(pname,pphoned) VALUES ('$telename','$telenum')";

		//execute 	
		return $this -> db_query($insertsql);
	}

	//--SELECT--//
	public function selectAll_cls(){
		//write query
		
		$selallsql = "SELECT * FROM phonebook";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}

	//--SELECT one--//
	public function selectOne_cls($telename,$telenum){
		//write query
		
		$selectonesql="SELECT * FROM phonebook WHERE pname='$telename', pphoned='$telenum' ";

		//execute 	
		return $this -> db_query($selectonesql);
	}
	//--UPDATE--//
	public function editContact_cls($phoneID,$newName,$newNum){
		//write query
		$updatesql = "UPDATE phonebook SET pname='$newName', pphoned='$newNum' WHERE pid='$phoneID' " ;

		//execute 
		return $this -> db_query($updatesql);
	}


	//--DELETE--//
	public function deleteContact_cls($phoneID){
		//write query
		$sql = "DELETE FROM phonebook WEHRE pid='phoneID' ";

		//execute 
		return $this -> db_query($sql);
	}

}

?>